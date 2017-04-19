@extends('layouts.app')

@section('content')

<div class="card-panel" style="margin:1.5%; text-align: center;">
    <h5>ADD NEW REPORT</h5>
</div>
<div class="card-panel" style="margin:1.5%">
	<!-- FIX FORM -->
	{!! Form::open(['url' => 'reports']) !!}
		 <div class="form-group">
	        {!! Form::label('station_name', 'Station Name:') !!}
	        {!! Form::text('station_name',null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div>
	    <div class="form-group">
	        {!! Form::label('location', 'Location (Town, Province):') !!}
	        {!! Form::text('location', null,['class'=>'form-control', 'required' => 'true']) !!}

	    </div>
		<div class="form-group">
	        {!! Form::label('sensor_type', 'Sensor Type:') !!}   
			<select class="browser-default" name="sensor_type" required>
			  <option value ="ARG">ARG</option>
			  <option value ="WLMS">WLMS</option>
			  <option value ="TDM">TDM</option>
			  <option value ="AWS">AWS</option>
			</select>
		</div>
		

		<h4 class="header2" style="padding-top:2%">INITIAL ASSESSMENT</h4>
		<div class="form-group">
	        {!! Form::label('date_assessed', 'Date Assessed:') !!}
	        <input type="date" name="date_assessed" class="datepicker" value="date_assessed" required>

	    </div>
		<div class="form-group">
	        {!! Form::label('problem', 'Problem/s:') !!}
	        {!! Form::textarea('problem', null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('work_tdone', 'Work/s to be done:') !!}
	        {!! Form::textarea('work_tdone', null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('last_data', 'Last Data:') !!}
	        {!! Form::textarea('last_data', null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('init_remarks', 'Remarks:') !!}
	        {!! Form::textarea('init_remarks', null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div>

		<h4 class="header2" style="padding-top:2%">ONSITE VISIT</h4>
		<div class="form-group">
	        {!! Form::label('date_visited', 'Date Visited:') !!}
	        <input type="date" name="date_visited" class="datepicker" value="date_visited" required>
	    </div>
	    <div class="form-group">
	        {!! Form::label('actual_defects', 'Actual Defect/s:') !!}
	        {!! Form::textarea('actual_defects', null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('work_done', 'Work/s done:') !!}
	        {!! Form::textarea('work_done', null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div>
	    <div class="form-group">
	        {!! Form::label('part_replaced', 'Part/s Replaced (if any):') !!}
	        {!! Form::textarea('part_replaced', null,['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	        {!! Form::label('tp_results', 'Test Points Results (if performed):') !!}
	        {!! Form::textarea('tp_results', null,['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	        {!! Form::label('rc_performed', 'Remote Commands Performed:') !!}
	        {!! Form::textarea('rc_performed', null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('onsite_remarks', 'Remarks:') !!}
	        {!! Form::textarea('onsite_remarks', null,['class'=>'form-control', 'required' => 'true']) !!}
	    </div><br>

	    <div class="form-group"  style="padding-top:2%">
	        {!! Form::label('conducted_by', 'Conducted by:') !!}
			{!! Form::text('conducted_by', Auth::user()->name,['class'=>'form-control', 'readonly'=>'true']) !!}
	        {!! Form::label('c_position', 'Position:') !!}
	        {!! Form::text('c_position', 'Position',['class'=>'form-control', 'readonly'=>'true']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::text('if_approved', '0',['class'=>'form-control', 'hidden'=>'true']) !!}
		</div>
	
		<?php  $time = Carbon\Carbon::now(new DateTimeZone('Asia/Singapore')); ?>
		{!! Form::text('sender_id', Auth::user()->id,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
		{!! Form::text('receiver_id', 2,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
		{!! Form::text('message', Auth::user()->name . ' added a new report',['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}	
		{!! Form::text('sent_at_date', $time->toDateString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
		{!! Form::text('sent_at_time', $time->toTimeString(),['class'=>'form-control datepicker', 'readonly'=>'true', 'hidden'=>'true']) !!}	
		


		<div class="input-field col s12">
          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
            <i class="mdi-content-send right"></i>
          </button>
        </div>
        <br><br>
	</form>	
</div>

<!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
<script>
	$(document).ready(function() {
		$('select').material_select();

	});
</script>

@endsection