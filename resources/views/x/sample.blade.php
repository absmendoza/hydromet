{!! Form::open(['url' => 'notifications']) !!}
		{!! Form::text('sender_id', Auth::user()->id,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
		{!! Form::text('receiver_id', 2,['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}
		{!! Form::text('message', 'Added a new report',['class'=>'form-control', 'readonly'=>'true', 'hidden'=>'true']) !!}			

<div class="input-field col s12">
          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
            <i class="mdi-content-send right"></i>
          </button>
        </div>
        
	{!! Form::close() !!}