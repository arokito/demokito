<?php

namespace demo;

use Illuminate\Database\Eloquent\Model;

class personalinfo extends Model
{
    
    public function user(){

        return $this->belongsTo('demo\User');
    }
}
