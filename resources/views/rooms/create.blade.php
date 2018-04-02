@extends('layouts.app')
@section('content')

<div class="container">
	<form method="POST" action="{{ route('rooms.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
		    <label for="name">Room Name <span class="required">*</span></label>
		    <input 
		    	type="text" 
		    	class="form-control" 
		    	id="name" 
		    	placeholder="Enter Room Name"
		    	required
		    	name="name"
		    	spellcheck="false"
		    	class="form-control" >
		</div>

		<div class="form-group">
			<input type="text" name="hotel_id" value="6" class="form-control" >
		</div>

		<div class="form-group">
			<input type="text" name="facility_id" value="2" class="form-control">
		</div>

		<div class="form-group">
		    <label for="price">Room Price <span class="required">*</span></label>
		    <input 
		    	type="number" 
		    	class="form-control" 
		    	id="price" 
		    	placeholder="Enter Room Price"
		    	required
		    	name="price"
		    	spellcheck="false"
		    	class="form-control" >
		</div>

		<div class="form-group">
		    <label for="hotel-image">Room Image <span class="required">*</span></label>
		    <input 
		    	type="file" 
		    	class="form-control" 
		    	id="hotel-image" 
		    	required
		    	name="room_thumbnail"
		    	spellcheck="false"
		    	class="form-control" >
		</div>

	  	<div class="form-group">
	  		<input type="submit" class="btn btn-primary" value="Submit"></input>
	  	</div>
	</form>
</div>
@endsection