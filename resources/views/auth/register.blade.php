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
<body class="register">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-register">
                    <div class="card-header">
                        <a href="{{ url('/') }}" class="logo"><img src="{{ URL('upload/bordered-logo.png') }}" alt="logo"></a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="register-form">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>

                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
