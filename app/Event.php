<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    function organiser(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    function presenters(){
        return $this->belongsToMany('App\User', 'presenters', 'event_id', 'user_id');
    }

    function visitors(){
        return $this->belongsToMany('App\User', 'event_visitors', 'event_id', 'user_id');
    }

}
