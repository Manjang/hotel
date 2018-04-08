@extends('layouts.app')
@section('content')

<form method="POST" action="{{ route('rooms.update', ['hotel' => $room->hotel_id]) }}" enctype="multipart/form-data">
	{{ csrf_field() }}

	<input type="hidden" name="_method" value="put">

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
	    	class="form-control"
	    	value="{{ $room->name }}">
	</div>

	<div class="form-group">
		<input type="text" name="hotel_id" value="{{ $room->hotel_id }}" class="form-control" >
	</div>

	<div class="form-group">
		<input type="text" name="facility_id" value="{{ $room->facility_id }}" class="form-control">
	</div>

	<div class="form-group">
	    <label for="price">Room Price <span class="required">*</span></label>
	    <input 
	    	type="text" 
	    	class="form-control" 
	    	id="price" 
	    	placeholder="Enter Room Price"
	    	required
	    	name="price"
	    	spellcheck="false"
	    	class="form-control"
	    	value="{{ $room->price }}">
	</div>

	<div class="form-group">
	    <label for="room_thumbnail">Room Image <span class="required">*</span></label>
	    <input 
	    	type="file" 
	    	class="form-control" 
	    	id="room_thumbnail" 
	    	required
	    	name="room_thumbnail"
	    	spellcheck="false"
	    	class="form-control"
	    	value="{{ $room->room_thumbnail }}">
	</div>

  	<div class="form-group">
  		<input type="submit" class="btn btn-primary" value="Submit"></input>
  	</div>
</form>
@endsection