@extends('layouts.backend')
@section('title','Dashboard Admin')
@section('content')


<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Jenis Laundry
          <a href="/tambah-jenis" class="btn btn-primary">Tambah</a>
        </h4>

        <div class="table-responsive">
          <table class="table zero-configuration">
            <thead>
              <tr>
                <th>#</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach($daftar as $d)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->jenis }}</td>
                <td> Rp {{ number_format($d->harga) }}</td>

                <td>
                  <form action="/#" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-sm btn-primary" data-id-update="id" id="updateStatus">Active</a>
                  </form>
                </td>
              </tr>
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
  // Update Status Karyawan
  $(document).on('click', '#updateStatus', function() {
    var id = $(this).attr('data-id-update');
    $.get('update-satatus-karyawan', {
      '_token': $('meta[name=csrf-token]').attr('content'),
      id: id
    }, function(_resp) {
      location.reload()
    });
  });
</script>
@endsection