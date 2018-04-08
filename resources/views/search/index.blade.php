@extends('layouts.app')
@section('content')

	<div class="bg-default">
		<div class="hotels-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d76726.37158537253!2d-16.73593082138007!3d13.42557436954063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgambia+hotels!5e1!3m2!1sen!2sgm!4v1521636384730" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div class="room-search container">
			<div class="quick-info">
				<div>
					<h1 class="quick-info--name">Search for "{{ Request::get('q') }}"</h1>
					<h3 class="quick-info--reasons">Tourism in Gambia</h3>
					<div class="quick-info--content">
						The Gambia, a tiny, tourism-reliant country in West Africa, typically averages about 4,000 visitors a week during its peak month of January. The tourism sector is one of the country's main revenue generators, contributing 20 percent of its budget. It also employs thousands of people. <a href="#">read more</a>
					</div>
				</div>


				<div class="share">
					<div class="addthis_inline_share_toolbox"></div>
				</div>

			</div>

			<form>
			  	<div class="field-set">
			    	<label for="checkin"></label>
			    	<input placeholder="checkin date" name="checkin" min="2018-03-19" max="2018-04-30" type="text" onfocus="(this.type='date')"  id="checkin"> 
			  	</div>

			  	<div class="field-set">
			    	<label for="checkout"></label>
			    	<input placeholder="checkout date" name="checkout" min="2018-03-19" max="2018-04-30" type="text" onfocus="(this.type='date')"  id="checkout"> 
			  	</div>

			  	<div class="field-set">
			    	<label for="room-type"></label>
			    	<select name="select-room">
						<optgroup label="Select Room">
							<option class="option" value="single-room">Single Room</option>
							<option class="option" value="double-room">Double Room</option>
							<option class="option" value="family-room">Family Room</option>
							<option class="option" value="multiple-room">Multiple Room</option>
						</optgroup>
					</select>
			  	</div>
			</form>
		</div>
	</div>

	<div class="flex-container container">
		<aside class="search-filter">
			<div class="average-rating">
				<p>Average rating</p>
				<img src="assets/images/star-on.png" alt="Star on">
				<img src="assets/images/star-on.png" alt="Star on">
				<img src="assets/images/star-on.png" alt="Star on">
				<img src="assets/images/star-on.png" alt="Star on">
				<img src="assets/images/star-half.png" alt="Star half">
			</div>

			<div class="quick-search">
				<form>
					<fieldset>
		                <legend>Filter by</legend>
		                	<div>
								<input autocomplete="off" maxlength="100" name="keybord-home" placeholder="search hotel by name" type="text">
								<a class="search-btn" href="#"><img src="assets/images/search.svg"></a>
		                	</div>

		                	<div>
		                		<p>Popular Filters</p>
		                		<input type="checkbox" name="popular-filters" value="breakfast" />Breakfast included <br />
		                        <input type="checkbox" name="popular-filters" value="apartment" />Apartments<br />
		                        <input type="checkbox" name="popular-filters" value="free-cancellation" />Free Cancellation<br />
		                        <input type="checkbox" name="popular-filters" value="nightclub" />Night Club<br />
		                        <input type="checkbox" name="popular-filters" value="air-conditioning" />Air Conditioning<br />
		                	</div>

		                	<div>
		                		<p>Facility</p>
		                		<input type="checkbox" name="facility" value="wifi" />Free WiFi <br />
		                        <input type="checkbox" name="facility" value="Parking" />Parking<br />
		                        <input type="checkbox" name="facility" value="swimming-pool" />Swimming Pool<br />
		                        <input type="checkbox" name="facility" value="room-service" />Room Service<br />
		                        <input type="checkbox" name="facility" value="swimming-pool" />Swimming Pool<br />
		                        <input type="checkbox" name="facility" value="spa" />Spa<br />
		                        <input type="checkbox" name="facility" value="restaurant" />Restaurant<br />
		                        <input type="checkbox" name="facility" value="pet-friendly" />Pet Friendly<br />
		                        <input type="checkbox" name="facility" value="fitness-center" />Fitness Center<br />
		                        <input type="checkbox" name="facility" value="family-room" />Family Room<br />
		                        <input type="checkbox" name="facility" value="disabled" />Facilities for Disableds<br />
		                	</div>
	                        
	                        <div>
		                		<p>Star rating</p>
		                		<input type="checkbox" name="star-rating" value="one-star" />1 Star <br />
		                        <input type="checkbox" name="star-rating" value="two-star" />2 Star<br />
		                        <input type="checkbox" name="star-rating" value="three-star" />3 Star<br />
		                        <input type="checkbox" name="star-rating" value="four-star" />4 Star<br />
		                        <input type="checkbox" name="star-rating" value="five-star" />5 Star<br />
		                        <input type="checkbox" name="star-rating" value="unrated" />Unrated<br />
		                	</div>
	                </fieldset>
				</form>
			</div>

			<a href="http://www.ourgambia.com" target="_blank" class="search-ad">
				<img src="assets/images/ourgambia.png" alt="Our Gambia Ad">
			</a>
		</aside>

		<section class="search-results">
			<div class="search-box">
				<span class="search-box--headline">Why book with us</span>
				<ul>
					<li>Booking is safe</li>
					<li>Value for money</li>
					<li>Manage your bookings online</li>
					<li>24/7 Customer Support</li>
					<li>Prices you can't beat</li>
					<li>Powered by Gambians in the Gambia</li>
				</ul>
			</div>

			@if ($hotels->count())
			<ul class="hotel-cards">
				@foreach ($hotels as $hotel)
				<li class="hotel-card">
					<div class="hotel-info">
						<a href="/hotels/{{ $hotel->id }}" class="hotel-name">{{ $hotel->name }}</a>
						<div class="hotel-rating">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
						</div>
						<div class="hotel-contact">{{ $hotel->address }}</div>
						

						<div class="hotel-image-details">
							<div class="hotel-image">
								<a href="/hotels/{{ $hotel->id }}"><img src="assets/images/cococean.jpg"></a>
							</div>
							<div class="hotel-details">
								<div class="hotel-about">
									<span>Elegant beach resort offering polished suites &amp; villas, plus a spa, 3 restaurants &amp; an outdoor pool.</span>
									<div class="hotel-facilities">
										<img src="assets/images/swimmer.svg" alt="Swimmer">
										<img src="assets/images/trophy.svg" alt="Trophy">
										<img src="assets/images/massage.svg" alt="Massage">
										<img src="assets/images/cheers.svg" alt="Cheers">
										<img src="assets/images/bus.svg" alt="Bus">
									</div>
								</div>
								<div class="hotel-reviews">
									<h4>8.5 out of 10</h4>
									<span>231 guests reviews</span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="hotel-pricing">
						<div class="hotel-price--night">
							<span class="price">$235/ night</span>
							<span class="price-info">for 1 night including taxes &amp; fees</span>
						</div>
						
						<div class="book-now"><a href="#" class="booking-btn">Choose Room</a></div>
					</div>
				</li>
				@endforeach


				<div class="load-more">
					<a href="#" class="load-more-btn">Load More</a>
				</div>
			</ul>
			@endif
		</section>
	</div>

@endsection