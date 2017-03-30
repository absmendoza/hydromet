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
    <!--
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
    <script type="text/javascript">
$(document).ready(function() {
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
});
</script>

    <!-- scripts -->
    @include('includes.end')
</body>
</html>