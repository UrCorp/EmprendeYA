<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\EnterprisesDescription;

class EnterprisesController extends Controller
{
  public function description($slug) {
    $enterprises_description = EnterprisesDescription::findBySlug($slug)->toArray();
    
    return response()->json($enterprises_description);
  }
}
