<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahap1 extends Model
{
    public function users(){
      return $this->hasMany('App\User');
    }
}
