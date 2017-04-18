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
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
        </li>
        <li class="bold"><a href="/" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home </a></li>
        <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calendar</a>
  <!---------------->
  
        <li class="bold"><a href="#userNotifs" class="waves-effect waves-cyan modal-trigger"><i class="mdi-action-announcement"></i> Notifications <span class="new badge">1</span></a>
        
        
        
        </li>
  
  
  
  <!---------------->
        <li class="bold"><a class="waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Sensor Statistics</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Maintenance Reports</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="addMaintenanceReport">Add Report</a></li>
                            <li><a href="viewMyMaintenanceReports">View My Reports</a></li>
                            <li><a href="viewMaintenanceReports">View All Reports</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
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
        
        @endif
    </ul>
    @endif
    
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>

</aside>
<div id="modal-fixed-footer">
        <div id="userNotifs" class="modal modal-fixed-footer">
            <div class="modal-content" align="justify">
                <div class="modal-header">Notifications</div>
                
            </div>
            <div class="modal-footer">
                <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>
            </div>
        </div>
    </div>
<script>
          $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
          });

          $user = User::find(Auth::user()->id);
          $user->newNotification()
            ->withType('RecipeFavorited')
            ->withSubject('Your recipe has been favorited.')
            ->withBody('<User X> has favorited your Caramel Cream Cakes recipe!')
            ->regarding($recipe)
            ->deliver();
            
          $unreadNotifications = $user->notifications()->unread()->get();

</script>