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

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	
</head>
<body class="home">
	<header class="main-header">
        <div class="header-container">
            <a href="#" class="logo"><img src="{{ URL('upload/hotel-logo.png') }}" alt="logo"></a>

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
                    <select name="select-lang" class="main-header--select-country">
                        <optgroup label="Language">
                            <option class="option"><a href="/en">EN</a></option>
                            <option class="option"><a href="/fr">FR</a></option>
                            <option class="option"><a href="/nl">NL</a></option>
                            <option class="option"><a href="/ar">AR</a></option>
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

	
	<div class="landing">
		<video autoplay muted loop id="hero">
		  	<source src="{{ URL('upload/promovid.mp4') }}" type="video/mp4">
		</video>

		<div class="hero-overlay">
			<a href="#" class="logo"><img src="{{ URL('upload/bordered-logo.png') }}" alt="logo"></a>

			<h2 class="tagline">Let's find your next stay in The Gambia</h2>

			<div class="share">
				<div class="addthis_inline_share_toolbox"></div>
			</div>

			<div class="search-form container">
				<form method="GET" action="search.html">
					<input maxlength="100" name="searchHotel" id="searchHotel" placeholder="search hotel by name" type="text">
					<button class="search-btn"><img src="{{ URL('upload/search.svg') }}"></button>
				</form>
			</div>

			<div class="cta">
				<p>Register your hotel with us for free? <a href="#">Register</a></p>
			</div>
		</div>
	</div>

	<div class="recommendations container">
		<h2 class="subheadline">Our Recommendations</h2>
		<ul class="recomm">
			<li class="recomm-stay family">
				<a href="#">Family</a>
			</li>

			<li class="recomm-stay romance">
				<a href="#">Romance</a>
			</li>

			<li class="recomm-stay business">
				<a href="#">Business</a>
			</li>
		</ul>
	</div>

	<div class="top-picks container">
		<h2 class="subheadline">{{ __('messages.headline') }}</h2>

		<ul class="cards">
            <?php $count = 0; ?>
			@foreach($hotels as $hotel)
                <?php if ($count == 8) break; ?>
				<li class="card">
					<a href="/hotels/{{ $hotel->id }}">
						<img src="{{ URL($hotel->hotel_thumbnail) }}">
						<div class="card-meta">
							<h2 class="hotel-name">{{ $hotel->name }}</h2>
							<span>{{ $hotel->address }}</span>
							<div>
								<span>125 Reviews</span>
								<span class="price">$55.00</span>
							</div>
						</div>
					</a>
				</li>
                <?php $count++; ?>
			@endforeach
		</ul>

		<div class="load-more">
			<a href="#" class="load-more-btn">Load More</a>
		</div>
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

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

</body>
</html>