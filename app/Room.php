<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
    	'name',
    	'room_thumbnail',
    	'hotel_id',
    	'user_id',
    	'facility_id',
    	'price',
    ];


    public function user() {
        return $this->belongsTo('App\User');
    }

    public function hotel() {
        return $this->belongsTo('App\Hotel');
    }

    public function facility() {
        return $this->hasMany('App\Facility');
    }
}
