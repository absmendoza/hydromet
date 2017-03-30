<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dist/material-datetime-picker.css">
	<script src="dist/material-datetime-picker.js"></script>
</head>

<body>
<div class="card-panel">
	 <h4 class="header2">Maintenance Form</h4>
	<!-- FIX FORM -->
	{!! Form::open(['url' => 'submitReport']) !!}
		 <div class="form-group">
	        {!! Form::label('station_name', 'Station Name:') !!}
	        {!! Form::text('station_name',null,['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	        {!! Form::label('location', 'Location (Town, Province):') !!}
	        {!! Form::text('location', null,['class'=>'form-control']) !!}

	    </div>
		<div class="form-group">
	        {!! Form::label('sensor_type', 'Sensor Type:') !!}   
			<select class="browser-default" name="sensor_type">
			  <option value ="ARG">ARG</option>
			  <option value ="WLMS">WLMS</option>
			  <option value ="TDM">TDM</option>
			  <option value ="AWS">AWS</option>
			</select>
		</div>
		

		<h4 class="header2" style="padding-top:2%">INITIAL ASSESSMENT</h4>
		<div class="form-group">
	        {!! Form::label('date_assessed', 'Date Assessed:') !!}
	        <input type="date" name="date_assessed" class="datepicker" value="date_assessed">

	    </div>
		<div class="form-group">
	        {!! Form::label('problem', 'Problem/s:') !!}
	        {!! Form::textarea('problem', null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('work_tdone', 'Work/s to be done:') !!}
	        {!! Form::textarea('work_tdone', null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('last_data', 'Last Data:') !!}
	        {!! Form::textarea('last_data', null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('init_remarks', 'Remarks:') !!}
	        {!! Form::textarea('init_remarks', null,['class'=>'form-control']) !!}
	    </div>

		<h4 class="header2" style="padding-top:2%">ONSITE VISIT</h4>
		<div class="form-group">
	        {!! Form::label('date_visited', 'Date Visited:') !!}
	        <input type="date" name="date_visited" class="datepicker" value="date_assessed">
	    </div>
	    <div class="form-group">
	        {!! Form::label('actual_defects', 'Actual Defect/s:') !!}
	        {!! Form::textarea('actual_defects', null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	        {!! Form::label('work_done', 'Work/s done:') !!}
	        {!! Form::textarea('work_done', null,['class'=>'form-control']) !!}
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
	        {!! Form::textarea('onsite_remarks', null,['class'=>'form-control']) !!}
	    </div><br>

	    <div class="form-group"  style="padding-top:2%">
	        {!! Form::label('conducted_by', 'Conducted by:') !!}
	        <input type="text" name="conducted_by" placeholder="Staff Name"/><br>
	        {!! Form::label('c_position', 'Position:') !!}
	        {!! Form::text('c_position', null,['class'=>'form-control']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('noted_by', 'Noted by:') !!}
	        <input type="text" name="noted_by" placeholder="Unit Head"/><br>
	        {!! Form::label('n_position', 'Position:') !!}
	        {!! Form::text('n_position', null,['class'=>'form-control']) !!}
	    </div>

		<div class="input-field col s12">
          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
            <i class="mdi-content-send right"></i>
          </button>
        </div>
        <br><br>
	</form>


<!--	<button class="c-btn c-datepicker-btn">
			  <span class="material-icon">Click me</span>
			</button>
			<pre id="output"></pre>-->
</div>
	<script>
		$(document).ready(function() {
	    $('select').material_select();
	});
	</script>

  <script src="dist/material-datetime-picker.js" charset="utf-8"></script>

<!--  <script>

    const picker = new MaterialDatePicker({})
      .on('submit', (d) => {
        output.innerText = d;
      });

    const el = document.querySelector('.c-datepicker-btn');
    el.addEventListener('click', () => {
      picker.open();
    }, false);

</script>-->

</body>
</html>