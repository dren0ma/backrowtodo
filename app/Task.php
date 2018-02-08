<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    function user() {
        return $this->belongsTo('App\User');
    }

    function comments() {
        return $this->hasMany('App\Comment');
    }
}
