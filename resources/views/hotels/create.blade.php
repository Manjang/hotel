@extends('layouts.app')
@section('content')

<div class="container">
	<form method="POST" action="{{ route('hotels.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
		    <label for="hotel-name">Hotel Name <span class="required">*</span></label>
		    <input 
		    	type="text" 
		    	class="form-control" 
		    	id="hotel-name" 
		    	placeholder="Enter Hotel Name"
		    	required
		    	name="name"
		    	spellcheck="false"
		    	class="form-control" >
		</div>

		<div class="form-group">
		    <label for="hotel-address">Hotel Address <span class="required">*</span></label>
		    <input 
		    	type="text" 
		    	class="form-control" 
		    	id="hotel-address" 
		    	placeholder="Enter Hotel Address"
		    	required
		    	name="address"
		    	spellcheck="false"
		    	class="form-control" >
		</div>

		<div class="form-group">
		    <label for="hotel-image">Hotel Image <span class="required">*</span></label>
		    <input 
		    	type="file" 
		    	class="form-control" 
		    	id="hotel-image" 
		    	required
		    	name="hotel_thumbnail"
		    	spellcheck="false"
		    	class="form-control" >
		</div>

	  	<div class="form-group">
		    <label for="star-rating">Hotel Star Rating</label>
		    <select class="form-control" id="star-rating" name="star_rating">
			    <option value="3 Star">3 Star</option>
			    <option value="4 Star">4 Star</option>
			    <option value="5 Star">5 Star</option>
		    </select>
	  	</div>
	  
	 	<div class="form-group">
	    	<label for="hotel-description">Hotel Description</label>
	    	<textarea 
	    		placeholder="Enter Hotel Description" 
	    		class="form-control autosize-target text-left" 
	    		id="hotel-description" 
	    		name="description" 
	    		rows="3" spellcheck="false"> </textarea>
	  	</div>

	  	<div class="form-group">
	  		<input type="submit" class="btn btn-primary" value="Submit"></input>
	  	</div>
	</form>
</div>
@endsection