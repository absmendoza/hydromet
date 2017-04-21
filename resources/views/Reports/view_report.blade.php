@extends('layouts.app')

@section('content')

<div class="card-panel" style="margin:1.5%; text-align: center;">
    <h5>APPROVED REPORTS</h5>
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
     <th>Conducted By</th>
 </tr>
 </thead>
 <tbody>
 <?php $reports = DB::table('reports')->get(); ?>
 @foreach ($reports as $report)
     @if ($report->if_approved == '1')
     <tr>
         <td>{{ $report->id }}</td>
         <td>{{ $report->station_name }}</td>
         <td>{{ $report->location }}</td>
         <td>{{ $report->sensor_type }}</td>
         <td>{{ $report->date_assessed }}</td>
         <td>{{ $report->conducted_by }}</td>
         <td><a class="waves-effect waves-light btn modal-trigger  light-blue modal-trigger" href="#viewReport-<?= $report->id?>">View</a></td>
     </tr>
     @endif
     <div id="modal-fixed-footer">
        <div id="viewReport-<?= $report->id?>" class="modal modal-fixed-footer">
            <div class="modal-content">
                <div class="modal-header">
            
                </div>
                @include('Reports/display_report')
            </div>
        <div class="modal-footer">
            <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>
        </div>
        </div>
    </div>
 @endforeach
 </tbody>
  
</table>
</div>

@endsection