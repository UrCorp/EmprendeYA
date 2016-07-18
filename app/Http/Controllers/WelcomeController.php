<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Kit;

class WelcomeController extends Controller
{
  public function index() {

    return view('site.welcome.index')->with([
      'kits'  => Kit::where('id', '>', '1')->get()
    ]);
  }
}
