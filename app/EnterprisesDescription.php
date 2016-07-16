<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterprisesDescription extends Model
{
  protected $table = "enterprises_description";

  protected $fillable =[
    'logo_path',
    'logo_file_name',
    'name',
    'description'
  ];

  protected $appends = ['logo_source'];

  public function getLogoSourceAttribute() {
    return $this->attributes['logo_source'] = $this->logo_path.$this->logo_file_name;
  }
}
