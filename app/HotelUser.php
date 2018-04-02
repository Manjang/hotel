<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelUser extends Model
{
    //
    protected $fillable = [
    	'hotel_id',
    	'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function hotel() {
        return $this->belongsTo('App\Hotel');
    }
}
