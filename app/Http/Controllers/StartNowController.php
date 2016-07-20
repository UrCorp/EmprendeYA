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

  public function send(Request $request) {
    $startnow = $request->input('startnow');

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
      $from = $request->input('from');
      $url = null;

      switch ($from) {
        case 'startnow':
          $url = '/comienzaya/';
          break;
          
        case 'index':
        default:
          $url = '/#comienzaya';
          break;
      }

      return redirect($url)
              ->withErrors($validator)
              ->withInput();
    } else {
      $startnow['kit'] = (string) $startnow['kit'];
      $kit_id = (int) Kit::findBySlug($startnow['kit'])->id;
      $startnow['kit_id'] = $kit_id;

      $reg_startnow = new StartNow();
      $reg_startnow->fill($startnow);

      if (! $reg_startnow->save()) {
        flash()->overlay('Ocurrió un error en el servidor. Por favor intentelo más tarde.', 'Error');

        return redirect()->route('site.index');
      }

      $startnow['kit'] = Kit::find($startnow['kit_id']);
      unset($startnow['kit_id']);

      $enterprise_mail_sent = Mail::send('site.emails.startnow_emprendeya', ['startnow' => $startnow], function ($m) use ($startnow) {
        $m->from('emprendeya@emprendeya.org', 'EmprendeYA Server');
        $m->replyTo($startnow['email'], $startnow['name']);
        $m->to('comienzaya@emprendeya.org', 'ComienzaYA');

        $m->subject('Solicitud de KIT | ComienzaYA');
      });

      $client_mail_sent = Mail::send('site.emails.startnow_client', ['startnow' => $startnow], function ($m) use ($startnow) {

        $m->from('emprendeya@emprendeya.org', 'EmprendeYA Server');
        $m->replyTo('comienzaya@emprendeya.org', 'ComienzaYA');
        $m->to($startnow['email'], $startnow['name']);

        $m->subject('Cotización de KIT '.cstrtoupper($startnow['kit']->name).' | ComienzaYA');
      });

      if (!$enterprise_mail_sent || !$client_mail_sent) {
        flash()->overlay('Ocurrió un error en el servidor. Por favor intentelo más tarde.', 'Error');

        return redirect()->route('site.index');
      }

      flash()->overlay('Tu información ha sido enviada, nos comunicaremos en breve contigo para comenzar a desarrollar tu kit.', 'ComienzaYA');
      return redirect()->route('site.index');
    }
  }
}
