<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function Area(){
        $this->belongsTo('App\Area','colorID');
    }
}
