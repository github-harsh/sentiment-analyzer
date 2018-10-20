<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function phones()
    {
    	return $this->hasMany('App\Phone');
    }
}
