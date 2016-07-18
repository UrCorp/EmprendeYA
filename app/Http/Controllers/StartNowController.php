<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Kit;
use App\StartNow;
use Validator;
use Mail;

class StartNowController extends Controller
{
  public function index(Request $request) {

    return view('site.startnow.index')->with([
      'kits'      => Kit::where('id', '>', '1')->get(),
      'kit_slug'  => $request->input('kit')
    ]);
  }

  public function mail(Request $request) {
    $startnow = $request->input('startnow');
    $startnow['kit'] = Kit::findBySlug($startnow['kit']);

    return view('site.emails.startnow')->with([
      'startnow'  => $startnow
    ]);
  }

  public function send(Request $request) {
    $startnow = $request->input('startnow');
    $startnow['kit'] = (string) $startnow['kit'];
    $kit_id = (int) Kit::findBySlug($startnow['kit'])->id;
    $startnow['kit_id'] = $kit_id;

    $validator = Validator::make($startnow, [
      'name'      => 'required|max:60',
      'phone'     => 'required|regex:/^[0-9]{10,15}$/',
      'email'     => 'required|email|max:255',
      'company'   => 'max:60',
      'city'      => 'max:60',
      'turn'      => 'required|max:60',
      'subject'   => 'max:500',
      'kit_id'    => 'required|integer|min:2|exists:kits,id'
    ]);

    if ($validator->fails()) {
      return redirect()->route('site.index')
              ->withErrors($validator)
              ->withInput();
    } else {
      $reg_startnow = new StartNow();
      $reg_startnow->fill($startnow);

      if (! $reg_startnow->save()) {
        return redirect()->route('site.index');
      }

      $startnow['kit'] = Kit::find($startnow['kit_id']);
      unset($startnow['kit_id']);

      $email_sent = Mail::send('site.emails.startnow', ['startnow' => $reg_startnow], function ($m) use ($reg_startnow) {
        /*
        $m->from('urcorp@urcorp.mx', 'UrCorp Server');
        $m->replyTo('contacto@urcorp.mx', 'Contacto UrCorp');
        $m->to($quotation['contact']['email'], $quotation['contact']['name'])
          ->cc('contacto@urcorp.mx', 'Contacto UrCorp');
        $m->subject('Cotización de Aplicaciones | UrCorp');
        */
        $m->from('emprendeya@emprendeya.org', 'EmprendeYA Server');
        $m->replyTo($reg_startnow->email, $reg_startnow->name);
        $m->to('comienzaya@emprendeya.org', 'ComienzaYA');

        $m->subject('Solicitud de KIT | ComienzaYA');
      });

      if (! $email_sent) {
        dd("Mensaje no enviado");
        return redirect()->route('site.index');
      }

      dd("Mensaje enviado");
      return redirect()->route('site.index');
    }
  }
}
