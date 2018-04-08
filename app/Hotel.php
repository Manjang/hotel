<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Hotel extends Model
{
    use Searchable;
    
    //
    protected $fillable = [
    	'name',
    	'address',
    	'hotel_thumbnail',
    	'star_rating',
    	'description',
    	'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function rooms() {
        return $this->hasMany('App\Room');
    }

    public function facilities() {
        return $this->hasMany('App\Facility');
    }

    public function galleries() {
        return $this->hasMany('App\Gallery');
    }

    // public function reviews() {
    //     return $this->hasMany('App\Review');
    // }

    public function reviews() {
        return $this->morphMany('App\Review', 'reviewable');
    }
}
