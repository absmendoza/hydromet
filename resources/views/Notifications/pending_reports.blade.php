@extends('layouts.app')
 
@section('content')


<div class="card-panel" style="margin:1.5%; text-align: center;">
    <h5>PENDING REPORTS</h5>
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
     @if ($report->if_approved == '0')
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
      <div class="modal-content" align="justify">
        <div class="modal-header">
        
        </div>
        @include('Reports/display_report')
      </div>
      <div class="modal-footer">
        <a href="#" class="waves-effect btn-flat modal-action modal-close">Close</a>
        {!! Form::model($report,['method' => 'PATCH','route'=>['reports.update',$report->id]]) !!}
            {!! Form::text('if_approved', '1',['class'=>'form-control', 'hidden'=>'true']) !!}
            {!! Form::text('n_position', 'Unit Head',['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
			{!! Form::text('noted_by', Auth::user()->employee_id,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
			
            <!--{!! Form::text('noted_by', Auth::user()->firstname.' '.Auth::user()->lastname,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
			-->

            <?php  $time = Carbon\Carbon::now(new DateTimeZone('Asia/Singapore')); ?>
            {!! Form::text('sender_id', Auth::user()->employee_id,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
            {!! Form::text('receiver_id', $report->conducted_by,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
            {!! Form::text('message', Auth::user()->employee_id . ' approved your report',['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}	
            {!! Form::text('sent_at_date', $time->toDateString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
            {!! Form::text('sent_at_time', $time->toTimeString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
            
            <!-- USER ACTIVITY -->
            {!! Form::text('employee_id', Auth::user()->employee_id,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
            {!! Form::text('position', Auth::user()->position,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
            {!! Form::text('employee_name', Auth::user()->firstname.' '.Auth::user()->lastname,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
            {!! Form::text('activity', 'Approved a maintenance report submitted by '.$report->conducted_by,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}	
            {!! Form::text('sent_at_date', $time->toDateString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
            {!! Form::text('sent_at_time', $time->toTimeString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
            


            <button class="waves-effect btn-flat" type="submit" name="action" onclick="Materialize.toast('Report approved', 4000)">Approve
        </button>
       <!-- <a href="#" class="waves-effect btn-flat modal-action modal-close">Approve</a>
        -->{!! Form::close() !!}
      </div>
    </div></div>
 @endforeach
 </tbody>
  
</table>
</div>

@endsection