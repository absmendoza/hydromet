<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

<!--materialize js-->
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>

<!--scrollbar-->
<script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>    

<!-- Google map API -->
<script type="text/javascript" src="{{ asset('js/script-map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6xvLOfDOXnS5nPnI9dHa4kg664Tu_TtU&libraries=places"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

<!-- Calendar Script -->
    <script type="text/javascript" src="{{ asset('js/plugins/fullcalendar/lib/jquery-ui.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/fullcalendar/lib/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/fullcalendar/fullcalendar-script.js') }}"></script>


<script>
$(document).ready(function() {
    $('#datatable').DataTable();


    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $('select').material_select();
});
</script>