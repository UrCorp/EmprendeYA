<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Kit extends Model implements SluggableInterface
{
  use SluggableTrait;

  protected $table = "kits";

  protected $sluggable = [
    'build_from'  => 'name',
    'save_to'     => 'slug',
    'on_update'   => true
  ];

  protected $fillable = [
    'name',
    'slug',
    'price'
  ];

  public function startnow() {
    return $this->hasMany('App\StartNow');
  }

  public function services() {
    return $this->belongsToMany('App\Service', 'kits_services');
  }
}
