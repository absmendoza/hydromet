<!DOCTYPE html>
<html ng-app>
<head>
<link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

</head>
<body ng-app="">
<table class="table table-striped table-bordered table-hover">
 <thead>
 <tr class="bg-info">
     <th>ID</th>
     <th>Station Name</th>
     <th>Location</th>
     <th>Sensor Type</th>
     <th>Date Assessed</th>
     <th>Conducted By</th>
 </tr>
 </thead>
 <tbody>
 <?php $reports = DB::table('reports')->get(); ?>
 @foreach ($reports as $report)
     <tr>
         <td>{{ $report->id }}</td>
         <td>{{ $report->station_name }}</td>
         <td>{{ $report->location }}</td>
         <td>{{ $report->sensor_type }}</td>
         <td>{{ $report->date_assessed }}</td>
         <td>{{ $report->conducted_by }}</td>
        <!-- <td><button id="repBtn" class="waves-effect waves-light btn modal-trigger  light-blue repBtn" onclick="ViewReport('viewReport-<?= $report->id?>')"> View Report </button></td>-->
        <td><a class="waves-effect waves-light btn modal-trigger  light-blue modal-trigger" href="#viewReport-<?= $report->id?>">Modal</a></td>
     </tr>
     <div id="modal-fixed-footer">
    <div id="viewReport-<?= $report->id?>" class="modal modal-fixed-footer">
      <div class="modal-content" align="justify">
        <div class="modal-header">
        
        </div>
        @include('display_report')
      </div>
      <div class="modal-footer">
        <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>

      </div>
    </div>  </div>
 @endforeach
 </tbody>
  
</table>

<!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>

    <script>
          $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
          });

          function ViewReport(id){
            var modal = document.getElementById(id);
            modal.style.display = "block";
          }
    </script>

    <script type="text/javascript" src="js/angular.min.js"></script>
</body>
</html>