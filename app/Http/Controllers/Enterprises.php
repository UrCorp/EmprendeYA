<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\EnterprisesDescription;

class Enterprises extends Controller
{
  public function description($name) {
    $enterprises_description = EnterprisesDescription::whereName($name)->first()->toArray();
    
    return response()->json($enterprises_description);
  }
}
