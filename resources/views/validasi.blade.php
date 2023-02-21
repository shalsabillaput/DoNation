
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('css/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('asse/css/adminlte.min.css')}}">
  <!-- Icon-->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
  <div class="login-logo">
    <a href="#"><b>DoNation</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login untuk berdonasi!</p>

      <form action="/validasi" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" required value="{{ old('username') }}" />          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
            @error('username')
                <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
          </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" placeholder="Password" name="password" required />          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="erga">
            <button type="sumit" class="btn btn-success col-lg-12">Validasi Akun</button>
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Lupa password</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Daftar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
</body>
</html>
