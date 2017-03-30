<div class="navbar-fixed">
    <nav class="cyan">
        @if (Route::has('login'))
        <div class="nav-wrapper">
            <h1 class="logo-wrapper"><a href="/" class="brand-logo darken-1"><img src="images/masthead.png" alt="materialize logo"></a> <span class="logo-text">DOST Region IV-A</span></h1>
            <ul class="right hide-on-med-and-down">
                <li class="search-out">
                    <input type="text" class="search-out-text">
                </li>
                <li>    
                    <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                </li>
            </ul>
        </div>
        @endif
    </nav>
</div>