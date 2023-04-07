@extends('layouts.backend')
@section('title','Profile')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@elseif($message = Session::get('error'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
  <div class="col-lg-4 col-xlg-3 col-md-5">
    <div class="card">
      <div class="card-body">
        <div class="col text-center">
          <div class="m-t-30">
            @if ($profileku != null)
            <img src="{{asset('storage/'.$profile->profile->foto)}}" class="rounded img-preview" width="230" />
            @else
            <p>Insert Profile Avatar</p>
            @endif

            <h4 class="card-title mt-1">{{$profile->name}}</h4>
            @if(Auth::user()->auth == "admin")
            <h6 class="small">Admininstrator</h6>
            @else
            <h6 class="small">Pelanggan</h6>
            @endif
          </div>
        </div>
      </div>
      @if($profileku == null)
      
      <form action="/user-profile-post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ $profile->id }}">
        <input type="hidden" name="id" value="{{ $profile->id }}">
        <input type="file" name="foto" id="img" onchange="previewImages()">

        <button type="submit" class="btn btn-primary">Change</button>
      </form>
      @else
      <form action="/user-profile-edit" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="oldFoto" value="{{ $profile->profile->foto }}" id="image">
        <input type="file" name="foto" id="img" onchange="previewImages()">

        <button type="submit" class="btn btn-primary">Change</button>
      </form>
      @endif
      <div>
        <hr>
      </div>
      <div class="card-body"> <small class="text-muted">Email address </small>
        <h6>{{$profile->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
        <h6>{{$profile->nomor_telp}}</h6> <small class="text-muted p-t-30 db">Address</small>
        <h6>{{$profile->alamat}}</h6>
        <small class="text-muted p-t-30 db">Social Profile</small>
        <br />
        <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
        <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
        <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>

        <div class="d-flex justify-content-between">
          <a data-toggle="modal" data-target="#edit_profile" id="click_profile_edit" class="btn btn-primary mt-2" data-id="{{$profile->id}}" data-email="{{$profile->email}}" data-name="{{$profile->name}}">Edit Profile</a>
          <a href="" id="reset_password" data-id="{{$profile->id}}" class="btn btn-warning mt-2">Reset Password</a>
        </div>
      </div>

    </div>
  </div>

  <div class="col-lg-8 col-xlg-9 col-md-7">
    <div class="card">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs profile-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Coming Soon</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Coming Soon</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Coming Soon</a> </li>
      </ul>

      <div class="card-body">
        <h5>COMING SOON !!!</h5>
      </div>
    </div>
  </div>
</div>
@include('admin.setting.modal')
@endsection

@section('scripts')
<script>
  // Tampilkan Modal Edit Profile
  $(document).on('click', '#click_profile_edit', function() {
    var id = $(this).attr('data-id');
    var name = $(this).attr('data-name');
    var email = $(this).attr('data-email');
    $("#id_profile").val(id)
    $("#name").val(name)
    $("#email").val(email)
  });

  // Proses Edit Profile
  $(document).on('click', '#update_profile', function() {
    var id_profile = $("#id_profile").val();
    var name = $("#name").val();
    var email = $("#email").val();

    $.get('{{Url("profile-admin-edit")}}', {
      '_token': $('meta[name=csrf-token]').attr('content'),
      id_profile: id_profile,
      name: name,
      email: email
    }, function(resp) {
      $("#id_harga").val('');
      $("#name").val('');
      $("#email").val('');
      location.reload();
    });
  });

  function previewImages() {
    const img = document.querySelector("#img");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";
    const reader = new FileReader();
    reader.readAsDataURL(img.files[0]);
    reader.onload = function(event) {
      imgPreview.src = event.target.result;
    }
  }
</script>
@endsection