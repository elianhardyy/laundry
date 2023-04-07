@extends('layouts.backend')
@section('title','Dashboard Karyawan')
@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            <a href="/add-order" class="btn btn-primary">Tambah</a>
        </h4>
        <h6>Info : <code> Untuk Mengubah Status Order & Pembayaran Klik Pada Bagian 'Action' Masing-masing.</code></h6>
        <div class="table-responsive m-t-0">
            <table id="myTable" class="table display table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Status Laundry</th>
                        <th>Payment</th>
                        <th>Jenis</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($pemesanan as $p)
                    <tr>
                        <td>{{ $no++ }}</td>

                        <td>{{ $p->name }}</td>
                        <td>
                            @if($p->status == "Pending")
                            <span class="label label-success">Pending</span>
                            @elseif($p->status == "Dijemput")
                            <span class="label label-success">Dijemput</span>
                            @elseif($p->status == "Sudah")
                            <span class="label label-success">Sudah</span>
                            @elseif($p->status == "Diambil")
                            <span class="label label-success">Diambil</span>
                            @elseif($p->status == "Selesai")
                            <span class="label label-success">Selesai</span>
                            @endif
                        </td>
                        <td>
                            <span class="label label-info">Pending</span>
                        </td>
                        <td>500000</td>
                        <td>{{$p->jenis}}</td>
                        <td>

                            <a class="btn btn-sm btn-danger" style="color:white" data-id-update="1" id="updateStatus">Bayar</a>
                            <a href="/#" class="btn btn-sm btn-warning" style="color:white">Invoice</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    // Update Status Laundry
    $(document).on('click', '#updateStatus', function() {
        var id = $(this).attr('data-id-update');
        $.get('update-status-laundry', {
            '_token': $('meta[name=csrf-token]').attr('content'),
            id: id
        }, function(_resp) {
            location.reload()
        });
    });

    // DATATABLE
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
        });
    });
</script>
@endsection