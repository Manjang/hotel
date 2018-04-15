<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/website">

	<title>Hotels | Find &amp; Book Hotels in The Gambia, West Africa</title>
	<meta name="description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy." />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ URL('upload/bordered-logo.png') }}">

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Hotels | Find &amp; Book Hotels in The Gambia, West Africa">
	<meta itemprop="description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy.">
	<meta itemprop="image" content="{{ URL('upload/stay.jpg') }}">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@GambiaOur">
	<meta name="twitter:title" content="Hotels | Find &amp; Book Hotels in The Gambia, West Africa">
	<meta name="twitter:description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy.">
	<meta name="twitter:creator" content="@GambiaOur">
	<!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="{{ URL('upload/stay.jpg') }}">

	<!-- Open Graph data -->
	<meta property="og:title" content="Hotels | Find &amp; Book Hotels in The Gambia, West Africa" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.hotel.gm/" />
	<meta property="og:image" content="{{ URL('upload/stay.jpg') }}" />
	<meta property="og:description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy." />
	<meta property="og:site_name" content="Hotels in Gambia" />
	<meta property="fb:admins" content="Facebook numberic ID" />

</head>
<body>
	<header class="main-header">
        <div class="header-container">
            <a href="{{ url('/') }}" class="logo"><img src="{{ URL('upload/hotel-logo.png') }}" alt="logo"></a>

            <ul class="main-header--left">
                <li class="main-header--left-item">
                    <select name="select-country" class="main-header--select-country">
                        <optgroup label="top currencies">
                            <option class="option" value="USD">USD - US Dollar</option>
                            <option class="option" value="EUR">EUR - Euro</option>
                            <option class="option" value="GBP">GBP - British Pound</option>
                        </optgroup>
                    </select>
                </li>
                <li class="main-header--left-item header-lang">
                    <select name="select-lang" class="main-header--select-country" onchange="location = this.value;">
                        <optgroup label="Language">

                            <option class="option">
                                {{ Config::get('languages')[App::getLocale()] }}
                            </option>

                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <option class="option" value="{{ route('lang.switch', $lang) }}">{{$language}}</option>
                                @endif
                            @endforeach
                        </optgroup>
                    </select>
                </li>
                <li class="main-header--left-item dropdown">
                    <span class="dropbtn"><img src="{{ URL('upload/user.svg') }}" alt="Profile"></span>
                    <ul class="dropdown-content">
                        @guest
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a href="#"
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                                @if(Auth::user()->role_id == 1)
	                                <div>
	                                    <a href="/hotels/create">Add Hotel</a>
	                                </div>
	                            @endif
                            </li>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </header>


	<div class="bg-default">
		<div class="room-search container">
			<div class="quick-info">
				<div>
					<h1 class="hotel-name">{{ $hotel->name }}</h1>
					<span class="hotel-address">{{ $hotel->address }}</span>
					<span class="star-rating">{{ $hotel->star_rating }}</span>
				</div>
				
				<div>
					<span>
						<img src="{{ URL('upload/like.svg') }}" alt="Hotel likes">
						
					    <h2>{{ $hotel->title }} <small>{{ $hotel->likes()->count() }} Likes </small></h2>

                        @if ($hotel->isLiked)
                            <a href="{{ route('hotel.like', $hotel->id) }}"> -- Unlike </a>
                        @else
                            <a href="{{ route('hotel.like', $hotel->id) }}"> -- Like</a>
                        @endif
					</span>
				</div>
			</div>

			<form>
			  	<div class="field-set">
			    	<label for="checkin"></label>
			    	<input type="date" id="checkin" name="checkin" min="2018-03-19" max="2018-04-30">
			  	</div>

			  	<div class="field-set">
			    	<label for="checkout"></label>
			    	<input type="date" id="checkout" name="checkout" min="2018-03-19" max="2018-04-30">
			  	</div>

			  	<div class="field-set">
			    	<label for="room-type"></label>
			    	<select name="select-room">
						<optgroup label="Select Room">
							@foreach($hotel->rooms as $room)
								<option class="option" value="single-room">{{ $room->name }}</option>
							@endforeach
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
				<img src="{{ URL('upload/star-on.png') }}" alt="Star on">
				<img src="{{ URL('upload/star-on.png') }}" alt="Star on">
				<img src="{{ URL('upload/star-on.png') }}" alt="Star on">
				<img src="{{ URL('upload/star-on.png') }}" alt="Star on">
				<img src="{{ URL('upload/star-half.png') }}" alt="Star half">
			</div>

			<div class="quick-search">
				<form method="GET" action="/search">
					<fieldset>
		                <legend>Filter by</legend>
		                	<div>
								<input autocomplete="off" maxlength="100" name="q" id="searchHotel" value="{{ Request::get('q') }}" placeholder="search hotel by name" type="text">
								<a class="search-btn" href="#"><img src="{{ URL('upload/search.svg') }}"></a>
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

			<div class="hotel-location">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.7904313728454!2d-16.734978684699804!3d13.425295208391624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec2975a842e0c2b%3A0x266e87f4e551c06f!2sCoco+Ocean+Resort+%26+Spa!5e0!3m2!1sen!2sgm!4v1521472044698" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="tripadvisor">
				<div id="TA_certificateOfExcellence741" class="TA_certificateOfExcellence">
					<ul id="gSanTSp1" class="TA_links tbdMb9ROXJjr">
						<li id="4iKTMinqET4" class="b1mACihe">
							<a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g1310445-d1232714-Reviews-Coco_Ocean_Resort_and_Spa-Bijilo_West_Coast_Division.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
						</li>
					</ul>
					</div>
					<script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=741&amp;locationId=1232714&amp;lang=en_US&amp;year=2017&amp;display_version=2"></script>
			</div>
		</aside>

		<section class="search-results">
			<div class="fotorama" data-nav="thumbs">
				@foreach($hotel->galleries as $gallery)
			  		<a href="{{ URL($gallery->name) }}"><img src="{{ URL($gallery->name) }}"></a>
			  	@endforeach
			</div>

			<div class="share">
				<div class="addthis_inline_share_toolbox"></div>
			</div>

			<div class="search-box">
				<ul>
					<span>{{ __('messages.headline') }}</span>
					<li>Free WiFi</li>
					<li>Parking</li>
					<li>Swimming Pool</li>
					<li>24/7 Room Service</li>
					<li>Sea View</li>
				</ul>
			</div>

			<ul class="hotel-room--cards">
				@foreach($hotel->rooms as $room)
				<li class="room-card">
					<div class="room-thumbnail">
						<img src="{{ URL($room->room_thumbnail) }}" alt="{{ $hotel->name }} room">
					</div>

					<div class="room-info-price">
						<div class="room-info">
							<h2 class="room-name">{{ $room->name }}</h2>
							<span class="room-note">Prices are per room for 11 nights, VAT included.</span>
							<ul class="room-facilities">
								<li>Air conditioning</li>
								<li>Private bathroom</li>
								<li>Telephone</li>
								<li>Hairdryer</li>
								<li>Refrigerator</li>
								<li>Satellite channels</li>
								<li>Cable channels</li>
							</ul>
						</div>

						<div class="room-price">
							<span class="room-price--night">${{ $room->price }}/ night</span>
							<span class="room-price--total">total: $2,350</span>
							<div class="book-now"><a href="#" class="booking-btn">Book Now</a></div>
						</div>
					</div>
				</li>
				@endforeach
			</ul>

			<div id="tabs" class="about-hotel">
				<ul>
				    <li><a href="#tabs-1">Info</a></li>
				    <li><a href="#tabs-2">Facilities</a></li>
				    <li><a href="#tabs-3">What People say</a></li>
				</ul>

				<div id="tabs-1">
				    <p>{{ $hotel->description }}</p>
				</div>

				<div id="tabs-2">
					@foreach($hotel->facilities as $facility)
						<div>
							<li> {{ $facility->name }} </li>
						</div>
				   	@endforeach
				</div>

				<div id="tabs-3">
					<div class="reviews">
					    @foreach($hotel->reviews as $review)
							<div class="review">
								<p><b>Name:</b> {{ $review->user->name }} </p>
								<p><b>Country:</b> {{ $review->country }} </p>
								<p><b>Review:</b> {{ $review->content }} </p>
							</div>
					   	@endforeach
					</div>

					<div class="review-form">
						<form method="POST" action="{{  route('reviews.store') }}" >
							{{ csrf_field() }}

							<input type="hidden" name="reviewable_type" value="App\Hotel">
							<input type="hidden" name="reviewable_id" value="{{ $hotel->id }}">

							<div class="form-group">
								<label for="name">Name: </label>
								<input placeholder="Enter your Name" 
									   type="text" 
									   name="name" 
									   spellcheck="false"
									   class="form-control">
							</div>
							<div class="form-group">
								<label for="country">Country</label>
								<input placeholder="Enter your country" 
									   type="text" 
									   name="country"
									   id="country" 
									   spellcheck="false"
									   class="form-control">
							</div>
							<div class="form-group">
								<label for="content">Message</label>
								<textarea placeholder="Enter your review"
										  style="resize: vertical"
										  id="content"
										  name="content"
										  rows="5" spellcheck="false"
										  class="form-control autosize-target text-left">
									
								</textarea>
								<div class="form-group">
									<input type="submit" class="btn" value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>


	<footer class="footer">
		<div class="footer-top">
			<div class="footer-top--wrap">
				<div class="footer-navs">
					<div class="footer-nav">
						<h4>Company</h4>
						<ul class="footer-menu">
							<li class="footer-menu--item"><a href="#">About hotel.gm</a></li>
							<li class="footer-menu--item"><a href="#">Spotlight</a></li>
							<li class="footer-menu--item"><a href="#">Videos</a></li>
							<li class="footer-menu--item"><a href="#">Artists</a></li>
							<li class="footer-menu--item"><a href="#">Join our team</a></li>
						</ul>
					</div>
					<div class="footer-nav">
						<h4>Assistance</h4>
						<ul class="footer-menu">
							<li class="footer-menu--item"><a href="#">F.A.Qs</a></li>
							<li class="footer-menu--item"><a href="#">Help</a></li>
							<li class="footer-menu--item"><a href="#">Disclaimer Policy</a></li>
							<li class="footer-menu--item"><a href="#">Priviledge</a></li>
						</ul>
					</div>
					<div class="footer-nav">
						<h4>Publications</h4>
						<ul class="footer-menu">
							<li class="footer-menu--item"><a href="#">Catalogue</a></li>
							<li class="footer-menu--item"><a href="#">OG Newsletter</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-connect">
					<div class="footer-helper">
						<div class="feedback">
							<a href="#">
								<i class="fa fa-comments"></i>
								<div class="footer-icon-text">
									<span>Submit</span>
									<span>Your feedback</span>
								</div>
							</a>
						</div>
						<div class="footer-call">
							<a href="tel:2204380533">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<div class="footer-icon-text">
									<span>Give us a Call</span>
									<span>+220 438 05 33</span>
								</div>
							</a>
						</div>
					</div>

					<div class="footer-social-media">
						<div class="app">
							<span>Download our App</span>
							<a href="#">
								<i class="fab fa-apple"></i>
							</a>
							<a href="#">
								<i class="fab fa-android"></i>
							</a>
						</div>
						<div class="social">
							<span>Get in touch</span>
							<div>
								<a href="https://www.facebook.com/ourgambiaofficial/">
									<i class="fab fa-facebook-square"></i>
								</a>
								<a href="https://twitter.com/GambiaOur">
									<i class="fab fa-twitter-square"></i>
								</a>
								<a href="https://www.instagram.com/ourgambia/">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
						</div>
						<div class="footer-card">
							<span>The Easiest way to pay</span>
							<span class="visa-card"></span>
							<span class="master-card"></span>
							<span class="cash-payment"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-bottom--wrap">
				<span>Copyright &copy; 2018 hotel.gm. All Rights Reserved</span>
				<span><a href="#">Privacy Policy</a></span>
				<span><a href="#">Terms and Condition</a></span>
				<span class="powered-by">Powered by: <a href="http://www.quest.gm">Quest</a></span>
			</div>
		</div>
	</footer>

	<!-- Add This Social Share -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7d63d60282207f"></script>
	

	
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> 
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> 

	<script type="text/javascript">
				
jQuery( document ).ready(function( $ ) {
  $("#tabs").tabs();
});
	</script>

</body>
</html>