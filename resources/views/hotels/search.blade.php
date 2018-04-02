<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/website">

	<title>Hotels | Find &amp; Book Hotels in The Gambia, West Africa</title>
	<meta name="description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy." />
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="http://stay.ourgambia.com/assets/images/bordered-logo.png">

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Hotels | Find &amp; Book Hotels in The Gambia, West Africa">
	<meta itemprop="description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy.">
	<meta itemprop="image" content="http://stay.ourgambia.com/assets/images/stay.jpg">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@GambiaOur">
	<meta name="twitter:title" content="Hotels | Find &amp; Book Hotels in The Gambia, West Africa">
	<meta name="twitter:description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy.">
	<meta name="twitter:creator" content="@GambiaOur">
	<!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="http://stay.ourgambia.com/assets/images/stay.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="Hotels | Find &amp; Book Hotels in The Gambia, West Africa" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.stay.ourgambia.com/" />
	<meta property="og:image" content="http://stay.ourgambia.com/assets/images/stay.jpg" />
	<meta property="og:description" content="Stay is an online travel agency specialized in hotel bookings, recommendations and reviews within The Gambia. We help customers book hotel rooms online, provide comprehensive help and support to our clients and make the hotel booking process smooth and easy." />
	<meta property="og:site_name" content="Hotels in Gambia" />
	<meta property="fb:admins" content="Facebook numberic ID" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
	<header class="main-header">
		<div class="header-container">
			<a href="#" class="logo"><img src="assets/images/hotel-logo.png" alt="logo"></a>

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
					<div class="main-header--left-default">EN</div>
				</li>
				<li class="main-header--left-item dropdown">
					<span class="dropbtn"><img src="assets/images/user.svg" alt="Profile"></span>
					<ul class="dropdown-content">
						<li><a href="#">Login</a></li>
						<li><a href="#">Sign Up</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</header>

	<div class="bg-default">
		<div class="hotels-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d76726.37158537253!2d-16.73593082138007!3d13.42557436954063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgambia+hotels!5e1!3m2!1sen!2sgm!4v1521636384730" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div class="room-search container">
			<div class="quick-info">
				<div>
					<h1 class="quick-info--name">The Gambia, West Africa</h1>
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

			<ul class="hotel-cards">
				<li class="hotel-card">
					<div class="hotel-info">
						<a href="#" class="hotel-name">Coco Ocean Resort &amp; Spa</a>
						<div class="hotel-rating">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
						</div>
						<div class="hotel-contact">1 Bamboo Drive, Kombo Coastal Road, Serrekunda</div>
						

						<div class="hotel-image-details">
							<div class="hotel-image">
								<a href="#"><img src="assets/images/cococean.jpg"></a>
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

				<li class="hotel-card">
					<div class="hotel-info">
						<a href="#" class="hotel-name">Kairaba Beach Hotel</a>
						<div class="hotel-rating">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
						</div>
						<div class="hotel-contact">Senegambia, Kololi, Serrekunda</div>
						

						<div class="hotel-image-details">
							<div class="hotel-image">
								<a href="#"><img src="assets/images/kairaba.jpg"></a>
							</div>
							<div class="hotel-details">
								<div class="hotel-about">
									<span>Elegant beach resort offering polished suites &amp; villas, plus a spa, 3 restaurants &amp; an outdoor pool.</span>
									<div class="hotel-facilities">
										<img src="assets/images/swimmer.svg" alt="Swimmer">
										<img src="assets/images/trophy.svg" alt="Trophy">
										<img src="assets/images/massage.svg" alt="Massage">
										<img src="assets/images/cheers.svg" alt="Cheers">
									</div>
								</div>
								<div class="hotel-reviews">
									<h4>9 out of 10</h4>
									<span>137 guests reviews</span>
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

				<li class="hotel-card">
					<div class="hotel-info">
						<a href="#" class="hotel-name">Sunset Beach Hotel</a>
						<div class="hotel-rating">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-off.png" alt="Star off">
						</div>
						<div class="hotel-contact">Kotu Stream Road, Kotu</div>
						

						<div class="hotel-image-details">
							<div class="hotel-image">
								<a href="#"><img src="assets/images/sunsetbeach.jpg"></a>
							</div>
							<div class="hotel-details">
								<div class="hotel-about">
									<span>Sunset Beach Hotel has a range of bungalows with private gardens, as well as two-storey buildings overlooking the pools and the Atlantic Ocean.</span>
									<div class="hotel-facilities">
										<img src="assets/images/swimmer.svg" alt="Swimmer">
										<img src="assets/images/trophy.svg" alt="Trophy">
										<img src="assets/images/cheers.svg" alt="Cheers">
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

				<li class="hotel-card">
					<div class="hotel-info">
						<a href="#" class="hotel-name">WoodPecker Resort</a>
						<div class="hotel-rating">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-half.png" alt="Star half">
						</div>
						<div class="hotel-contact">Brikama Highway, Banjulunding</div>
						

						<div class="hotel-image-details">
							<div class="hotel-image">
								<a href="#"><img src="assets/images/woodpecker.jpg"></a>
							</div>
							<div class="hotel-details">
								<div class="hotel-about">
									<span>The #1 Airport hotel in The Gambia</span>
									<div class="hotel-facilities">
										<img src="assets/images/swimmer.svg" alt="Swimmer">
										<img src="assets/images/trophy.svg" alt="Trophy">
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

				<li class="hotel-card">
					<div class="hotel-info">
						<a href="#" class="hotel-name">Golden Beach Hotel</a>
						<div class="hotel-rating">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-on.png" alt="Star on">
							<img src="assets/images/star-off.png" alt="Star off">
							<img src="assets/images/star-off.png" alt="Star off">
						</div>
						<div class="hotel-contact">Senegambia, Kololi</div>
						

						<div class="hotel-image-details">
							<div class="hotel-image">
								<a href="#"><img src="assets/images/hotel1.jpg"></a>
							</div>
							<div class="hotel-details">
								<div class="hotel-about">
									<span>Elegant beach resort offering polished suites &amp; villas, plus a spa, 3 restaurants &amp; an outdoor pool.
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

				<div class="load-more">
					<a href="#" class="load-more-btn">Load More</a>
				</div>
			</ul>
		</section>
	</div>


	<footer class="footer">
		<div class="footer-top">
			<div class="footer-top--wrap">
				<div class="footer-navs">
					<div class="footer-nav">
						<h4>Company</h4>
						<ul class="footer-menu">
							<li class="footer-menu--item"><a href="#">About Stay.gm</a></li>
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
				<span>Copyright &copy; 2018 Stay.gm. All Rights Reserved</span>
				<span><a href="#">Privacy Policy</a></span>
				<span><a href="#">Terms and Condition</a></span>
				<span class="powered-by">Powered by: <a href="http://www.quest.gm">Quest</a></span>
			</div>
		</div>
	</footer>

	<!-- Add This Social Share -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7d63d60282207f"></script>
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
</body>
</html>