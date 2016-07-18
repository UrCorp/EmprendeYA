<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StartNow extends Model
{
  protected $table = "startnow";

  protected $fillable = [
    'name',
    'phone',
    'email',
    'company',
    'city',
    'turn',
    'subject',
    'kit_id'
  ];

  public function getNameAttribute() {
    return cucwords($this->attributes['name']);
  }
}
