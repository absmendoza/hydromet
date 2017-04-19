@extends('layouts.app')
 
@section('content')

<div class="card-panel" style="margin:1.5%; text-align: center;">
    <h5>NOTIFICATIONS</h5>
</div>
<div class="card-panel">
	<div class="col s12 m8 l9">
		<div class="collection">
		@foreach($notifications as $notif)
			@if($notif->is_read == 0 && $notif->receiver_id == Auth::user()->id)
			<a href="#!"  class="collection-item" >
					{{ $notif->message . " on " . $notif->sent_at_date . " at " . $notif->sent_at_time}}.
					<!--<button class="waves-effect waves-light btn modal-trigger  light-blue modal-trigger" href="##">View</button>-->
			</a>
			
			@endif
		@endforeach
		</div>
	</div>

</div>

<!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
@endsection


