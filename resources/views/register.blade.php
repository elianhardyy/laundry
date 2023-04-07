<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>

<body>
  <div class="login-form">
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <h1>Register</h1>
      <div class="content">
        <div class="input-field">
          <input type="text" placeholder="Name" autocomplete="nope" name="name" class="@error('name') is-invalid @enderror">
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="input-field">
          <input type="text" placeholder="Username" autocomplete="nope" name="username" class="@error('username') is-invalid @enderror">
          @error('username')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="nope" name="email" class="@error('email') is-invalid @enderror">
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="input-field">
          <input type="text" placeholder="Alamat" autocomplete="nope" name="alamat" class="@error('alamat') is-invalid @enderror">
          @error('alamat')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="input-field">
          <input type="text" placeholder="Nomot Telepon" autocomplete="nope" name="nomor_telp" class="@error('nomor_telp') is-invalid @enderror">
          @error('nomor_telp')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" autocomplete="new-password" name="password" class="@error('password') is-invalid @enderror">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password Confirmation" autocomplete="new-password" name="password_confirmation" class="@error('password') is-invalid @enderror">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

      </div>
      <div class="action">
        <button type="submit">Register</button>
      </div>
    </form>
  </div>

  <script src="./login.js"></script>
</body>

</html>