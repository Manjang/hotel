@extends('layouts.app')
@section('content')

<div class="container">
	<form method="POST" action="{{ route('galleries.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
		    <label for="name">Hotel Image <span class="required">*</span></label>
		    <input 
		    	type="file" 
		    	class="form-control" 
		    	id="name" 
		    	required
		    	name="name"
		    	spellcheck="false"
		    	class="form-control" >
		</div>

		<div class="form-group">
			<input type="text" name="hotel_id" value="6" class="form-control" >
		</div>

	  	<div class="form-group">
	  		<input type="submit" class="btn btn-primary" value="Submit"></input>
	  	</div>
	</form>
</div>
@endsection