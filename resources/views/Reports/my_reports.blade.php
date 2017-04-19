@extends('layouts.app')

@section('content')

<div class="card-panel" style="margin:1.5%; text-align: center;">
    <h5>MY REPORTS</h5>
</div>
<div class="card-panel" style="margin:1.5%">
<table class="table table-striped table-bordered table-hover">
 <thead>
 <tr class="bg-info">
     <th>ID</th>
     <th>Station Name</th>
     <th>Location</th>
     <th>Sensor Type</th>
     <th>Date Assessed</th>
 </tr>
 </thead>
 <tbody>
 <?php $reports = DB::table('reports')->get(); ?>
 @foreach ($reports as $report)
     @if(strcmp($report->conducted_by, Auth::user()->name) == 0)
     <tr>
         <td>{{ $report->id }}</td>
         <td>{{ $report->station_name }}</td>
         <td>{{ $report->location }}</td>
         <td>{{ $report->sensor_type }}</td>
         <td>{{ $report->date_assessed }}</td>
         <td><a class="waves-effect waves-light btn modal-trigger  light-blue modal-trigger" href="#viewReport-<?= $report->id?>">View</a></td>
         @if($report->if_approved == 1)
         <td><a class="waves-effect waves-light btn light-green">Approved</a></td>
         @else
         <td><a class="waves-effect waves-light btn modal-trigger  light-blue modal-trigger" href="#editReport-<?= $report->id?>">Edit</a></td>
         @endif
         </tr>
     @endif
    <div id="modal-fixed-footer">
        <div id="viewReport-<?= $report->id?>" class="modal modal-fixed-footer">
            <div class="modal-content" align="justify">
                <div class="modal-header"></div>
                @include('Reports/display_report')
            </div>
            <div class="modal-footer">
                <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>
            </div>
        </div>
    </div>

    <div id="modal-fixed-footer">
        <div id="editReport-<?= $report->id?>" class="modal modal-fixed-footer">
            <div class="modal-content" align="justify">
                <div class="modal-header"></div>
                {!! Form::model($report,['method' => 'PATCH','route'=>['reports.update',$report->id]]) !!}
                @include('Reports/edit_report')  
            </div>
            <div class="modal-footer">
                <button class="waves-effect btn-flat" type="submit" name="action">Submit
                </button>
                </form>
                <a href="#" class="waves-effect btn-flat modal-action modal-close">Cancel</a>
 
               
           </div>
        </div>
    </div>


 @endforeach
 </tbody>
  
</table>
</div>
<!-- jQuery Library -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
<!--materialize js-->
<script type="text/javascript" src="js/materialize.js"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script>
        $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
        });

</script>

@endsection