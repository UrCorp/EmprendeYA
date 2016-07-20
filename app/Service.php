<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Service extends Model implements SluggableInterface
{
  use SluggableTrait;

  protected $table = "services";

  protected $sluggable = [
    'build_from'  => 'name',
    'save_to'     => 'slug',
    'on_update'   => true
  ];

  protected $fillable = [
    'name',
    'slug',
    'description'
  ];

  public function kits() {
    return $this->belongsToMany('App\Kit', 'kits_services');
  }
}
