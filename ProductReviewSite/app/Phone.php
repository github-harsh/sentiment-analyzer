<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    return $this->hasMany('App\Review');
}
