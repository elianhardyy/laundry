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
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="login-form">
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <h1>Login</h1>
      <div class="content">
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="nope" name="email">
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" autocomplete="new-password" name="password">
        </div>
        <div class="row mb-3">
          <div class="col-md-6 offset-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
        </div>
        <a href="{{ route('forget.password.get') }}" class="link">Forgot Your Password?</a>
      </div>
      <div class="action">
        <form action="{{ route('register_view') }}" method="GET">
          <button type="submit">Register</button>
        </form>
        <button type="submit">Sign in</button>
      </div>
    </form>
  </div>

  <script src="./login.js"></script>
</body>

</html>