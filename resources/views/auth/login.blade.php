<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 3.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
	@include('includes.head')
</head>
<body class="white">
    <!-- 
	@include('includes.loading')
     -->

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
                                        <input id="email" type="email" class="form-control" name="email" required autofocus>

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
    
    @include('includes.end')
</body>
</html>