@extends('layouts.backend')
@section('title','Tambah Data Order')
@section('content')

<div class="card card-outline-info">
  <div class="card-header">
    <h4 class="card-title">Form Tambah Data Order</h4>
  </div>
  <div class="card-body">

    <div class="form-body">
      <div class="row p-t-20">


        <div class="col-md-3">
          <div class="form-group has-success">
            <label class="control-label">Jumlah</label>
            <input type="number" class="form-control" value="1" name="jumlah" id="jumlah" onchange="hargaBerubah()">
            <button class="btn btn-primary" id="kurang">-</button>
            <button class="btn btn-primary" id="tambah">+</button>
          </div>
        </div>
      </div>

      <form action="/checkout" method="POST">
        @csrf
        <div class="row">
          <input type="hidden" name="satuan" id="jumlahHidden" value="">
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

          <div class="col-md-3">
            <div class="form-group has-success">
              <label class="control-label">Jenis</label>
              <select id="jenis_id" name="jenis_id" class="form-control select2 @error('harga_id') is-invalid @enderror" onchange="berubah()">
                <option value="">-- Jenis Pakaian --</option>
                @foreach($daftar as $d)
                <option value="{{ $d->harga }}">{{ $d->jenis }}</option>
                @endforeach
              </select>

            </div>
          </div>

          <div class="col-md-3">
            <label class="control-label">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="">

          </div>

        </div>

        <input type="hidden" name="tgl">
        <!--/row-->
    </div>
    <div class="form-actions">
      <button type="submit" class="btn btn-primary mr-1 mb-1">Tambah</button>
      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
    </div>
    </form>
    <!-- else -->
    <div class="col text-center">
      <h2 class="text-danger">
        Data Customer Masih Kosong !
      </h2>
    </div>

  </div>
</div>
<!-- else -->
<div class="card">
  <div class="col text-center">
    <img src="{{asset('backend/images/pages/empty.svg')}}" style="height:500px; width:100%; margin-top:10px">
    <h2 class="mt-1">Data Harga Kosong / Tidak Aktif !</h2>
    <h4>Mohon hubungi Administrator :)</h4>
  </div>
</div>
<script>

</script>
@endsection
@section('scripts')
<script type="text/javascript">
  var jumlahHidden = document.getElementById("jumlahHidden");
  var jenis = document.getElementById("jenis_id");
  var harga = document.getElementById("harga");
  var coba = document.getElementById("coba");
  var jumlah = document.getElementById("jumlah");
  var tambah = document.getElementById("tambah");
  var kurang = document.getElementById("kurang");
  var res = 1;

  function berubah() {
    var jenisHarga = jenis.value;
    harga.value = jenisHarga;
  }
  tambah.addEventListener("click", function() {
    jumlahHidden.value = res;
    jumlah.value = res;
    harga.value = Number(jumlah.value * jenis.value);
    if (harga.value === 0) {
      jumlah.value = 1;
      res = 1;
    }
    res++;
  })
  kurang.addEventListener("click", function() {
    if (jumlah.value < 2) {
      res = 1;
    }
    jumlahHidden.value = res;
    jumlah.value = res;
    harga.value = Number(jumlah.value * jenis.value);
    res--;
  })
  // Filter Harga
  $(document).ready(function() {
    var id = $("#id").val();
    $.get('{{ Url("listhari") }}', {
      '_token': $('meta[name=csrf-token]').attr('content'),
      id: id
    }, function(resp) {
      $("#select-hari").html(resp);
      $.get('{{ Url("listharga") }}', {
        '_token': $('meta[name=csrf-token]').attr('content'),
        id: id
      }, function(resp) {
        $("#select-harga").html(resp);
      });
    });
  });

  $(document).on('change', '#id', function(e) {
    var id = $(this).val();
    $.get('{{ Url("listhari") }}', {
      '_token': $('meta[name=csrf-token]').attr('content'),
      id: id
    }, function(resp) {
      $("#select-hari").html(resp);
    });
  });

  $(document).on('change', '#id', function(e) {
    var id = $(this).val();
    $.get('{{ Url("listharga") }}', {
      '_token': $('meta[name=csrf-token]').attr('content'),
      id: id
    }, function(resp) {
      $("#select-harga").html(resp);
    });
  });
</script>
@endsection