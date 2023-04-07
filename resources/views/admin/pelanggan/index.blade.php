@extends('layouts.backend')
@section('title','Admin - Data Customer')
@section('header','Data Customer')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Data Customer
          {{-- <a href="/#" class="btn btn-primary">Tambah</a> --}}
        </h4>

        <div class="table-responsive m-t-0">
          <table id="myTable" class="table display table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach($users as $user)
              @if($user->auth == "pelanggan")
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->nomor_telp }}</td>
                <td>

                </td>
                <td>
                  <a href="/#" class="btn btn-info btn-sm">Info</a>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
  $(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
      var table = $('#example').DataTable({
        "columnDefs": [{
          "visible": false,
          "targets": 2
        }],
        "order": [
          [2, 'asc']
        ],
        "displayLength": 25,
        "drawCallback": function(settings) {
          var api = this.api();
          var rows = api.rows({
            page: 'current'
          }).nodes();
          var last = null;
          api.column(2, {
            page: 'current'
          }).data().each(function(group, i) {
            if (last !== group) {
              $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
              last = group;
            }
          });
        }
      });
      // Order by the grouping
      $('#example tbody').on('click', 'tr.group', function() {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
          table.order([2, 'desc']).draw();
        } else {
          table.order([2, 'asc']).draw();
        }
      });
    });
  });
  $('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });
</script>
@endsection