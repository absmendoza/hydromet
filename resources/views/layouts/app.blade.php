<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 1.0
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    @include('includes.head')
</head>

<body>
    <!-- Uncomment below to put loading chorva
    @include('includes.loading')
    -->

    <header id="header" class="page-topbar">
        @include('includes.header')
    </header>

    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <!-- START LEFT SIDEBAR NAV-->
            @include('includes.sidenav')
            <!-- END LEFT SIDEBAR NAV-->

            <!-- main activity goes here -->
            @yield('content')
            <!-- main activity ends here -->
        </div>
        <!-- END WRAPPER -->

    </div>

    <footer class="page-footer">
        @include('includes.footer')
    </footer>

    <!-- scripts -->
    @include('includes.end')
</body>
</html>