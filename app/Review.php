<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
    	'name',
    	'country',
    	'content',
    	'reviewable_id',
        'reviewable_type',
    	'user_id',
    ];


    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function hotel() {
        return $this->belongsTo('App\Hotel');
    }

    public function reviewable() {
        return $this->morphTo();
    }
}
