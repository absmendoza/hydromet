<aside id="left-sidebar-nav">
    @if (Route::has('login'))
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        @if (Auth::check())
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/default.png" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" class="waves-effect waves-block waves-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi-hardware-keyboard-tab"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>
        <li class="bold"><a href="/" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home </a></li>
        <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calendar</a>
        <li class="bold"><a class="waves-effect waves-cyan"><i class="mdi-action-announcement"></i> Notifications <span class="new badge">1</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Sensor Statistics</a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan" href="maintenanceReps"><i class="mdi-editor-insert-comment"></i> Maintenance Reports</a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan" href="userCRUD"><i class="mdi-action-account-box"></i>Users</a>
        </li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
        <li><a class="waves-effect waves-cyan" href="#"><i class="#"></i> User Activity</a>
        </li>
        <li><a class="waves-effect waves-cyan" href="#"><i class="#"></i> Help</a>
        </li>
        @else
        <li class="bold">
            <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="images/default.png" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <a class="btn-flat waves-effect waves-light white-text profile-btn" href="/login">Login<i class="mdi-action-input right"></i></a>
                        <p class="user-roal">Guest</p>
                    </div>

                </div>
            </li>
                        
        </li>
        <li>
            <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email" class="center-align">E-Mail Address</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">          
                    <div class="input-field col s12 m12 l12  login-text">
                        <input type="checkbox" id="remember-me" />
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a href="/" class="btn waves-effect waves-light col s12">Login</a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
                    </div>          
                </div>
            </form>
        </li>
        @endif
    </ul>
    @endif
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
</aside>