<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaRegisteration extends Model
{
    protected $table = 'media_registeration';
    public $timestamps = false;

    public function media_staff()
    {
      return $this->hasMany('App\MediaStaff','id','media_manager');
    }
}
