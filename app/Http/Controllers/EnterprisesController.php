<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\EnterprisesDescription;

class EnterprisesController extends Controller
{
  public function description($slug) {
    $description = EnterprisesDescription::findBySlug($slug)->toArray();
    
    return response()->json($description);
  }

  public function download_description($slug) {
    $description = EnterprisesDescription::findBySlug($slug)->toArray();

    return response()->download($description['description_source']);
  }
}
