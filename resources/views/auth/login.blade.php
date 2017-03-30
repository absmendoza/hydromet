<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 3.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('images/favicon/icon-32x32.png') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/icon-152x152.png') }}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png') }}">
    <!-- For Windows Phone -->

    <!-- CORE CSS-->    
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

</head>
<body class="white">
    <!-- uncomment code block below to unable Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <center>
    <div class="white loaded" style="width: 301px; padding: 25px 0">
        <div id="login-page" class="row">
            <div class="col s12 z-depth-4 card-panel">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <a href="/"><img src="images/favicon/icon-152x152.png" alt="logo" class="square responsive-img valign profile-image-login"></a>
                            <p class="center login-form-text">Login to Hydromet Station Maintenance System</p>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row margin{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-field col s12">
                                        <i class="mdi-social-person-outline prefix"></i>
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>

                            <div class="row margin{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-field col s12">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <input type="checkbox" id="remember-me" />
                                        <label for="remember-me">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light col s12">
                                        Login
                                    </button>
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="input-field col s12">
                                  <p class="margin left-align medium-small"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
                              </div>       
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
       
     <!--plugins.js - Some Specific JS codes for Plugin Settings (loading page)-->
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
</body>
</html>