<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
  public function tahap1(){
      return $this->belongsTo('App\Tahap1');
    }
}
