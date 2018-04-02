<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    protected $fillable = [
    	'name',
    	'hotel_id',
    	'user_id',
    	'room_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function hotel() {
        return $this->belongsTo('App\Hotel');
    }

    public function room() {
        return $this->belongsTo('App\Room');
    }
}
