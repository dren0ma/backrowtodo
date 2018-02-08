<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function task() {
        return $this->belongsTo('App\Task');
    }

    function user() {
        return $this->belongsTo('App\User');
    }
}
