<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'App') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <a href="#" class="logo"><img src="{{ asset('images/hotel-logo.png') }}" alt="logo"></a>

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
                    <span class="dropbtn"><img src="assets/images/user.svg" alt="Profile"></span>
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

                                <div>
                                    <a href="/hotels/create">Add Hotel</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    @include('partials.errors')
    @include('partials.success')

        <main class="py-4">
            @yield('content')
        </main>


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

</body>
</html>