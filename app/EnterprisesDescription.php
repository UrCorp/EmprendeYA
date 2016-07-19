<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class EnterprisesDescription extends Model implements SluggableInterface
{
  use SluggableTrait;

  protected $table = "enterprises_description";

  protected $sluggable = [
    'build_from'  => 'name',
    'save_to'     => 'slug',
    'on_update'   => true
  ];

  protected $fillable =[
    'slug',
    'logo_path',
    'logo_file_name',
    'name',
    'description',
    'description_path',
    'description_file_name'
  ];

  protected $appends = ['logo_source', 'description_source', 'link_download_description'];

  public function getLogoSourceAttribute() {
    return $this->attributes['logo_source'] = $this->logo_path.$this->logo_file_name;
  }

  public function getDescriptionSourceAttribute() {
    return $this->attributes['description_source'] = $this->description_path.$this->description_file_name;
  }

  public function getLinkDownloadDescriptionAttribute() {
    return $this->attributes['link_download_description'] = 'enterprises/'.$this->slug.'/download/description';
  }
}
