<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientsController extends Controller
{
  public function index() {

    return view('site.clients.index');
  }
}
