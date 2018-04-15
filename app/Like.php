<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class Like extends Model
	{
	    use SoftDeletes;
	    protected $table = 'likeables';
	    protected $fillable = [
	        'user_id',
	        'likeable_id',
	        'likeable_type',
	    ];
	    /**
	     * Get all of the hotels that are assigned this like.
	     */
	    public function hotels()
	    {
	        return $this->morphedByMany('App\Hotel', 'likeable');
	    }
	    
	}