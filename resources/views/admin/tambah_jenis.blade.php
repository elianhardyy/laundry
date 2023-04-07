@extends('layouts.backend')
@section('title','Form Tambah Jenis Laundry')
@section('header','Tambah Jenis Laundry')
@section('content')
<div class="col-md-12 col-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Form Tambah Jenis Laundry</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        @error('errors')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form action="/tambahkan" method="POST" class="form form-vertical">
          @csrf
          <div class="form-body">
            <div class="row">
              <div class="col-lg-4 col-xl-4 col-12">
                <div class="form-group">
                  <label for="nama">Jenis</label>
                  <div class="position-relative">
                    <input type="text" name="jenis" id="name" class="form-control @error('jenis') is-invalid @enderror" placeholder="Jenis" value="{{old('jenis')}}">
                    @error('jenis')
                    <span class="invalid-feedback text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xl-4 col-12">
                <div class="form-group">
                  <label for="nama">Harga</label>
                  <div class="position-relative">
                    <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga" value="{{old('harga')}}">
                    @error('harga')
                    <span class="invalid-feedback text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>


              <div class="col-12">
                <button type="submit" class="btn btn-primary mr-1 mb-1">Tambah</button>
                <a href=" /# " class="btn btn-outline-warning mr-1 mb-1">Batal</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection