<?php

namespace demo;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){

        return $this->belongsTo('demo\User');
    }
}
