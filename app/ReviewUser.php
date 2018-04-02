<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewUser extends Model
{
    //
    protected $fillable = [
    	'review_id',
    	'user_id',
    ];
}
