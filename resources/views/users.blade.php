
<!DOCTYPE html>
<head>
  <link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
  <table class="datatable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created at</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('users.serverSide') }}'
        });
    });
  </script>
</body>
