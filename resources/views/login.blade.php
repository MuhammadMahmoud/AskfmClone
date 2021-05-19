<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset("Styles/css/all.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset("Styles/css/icheck-bootstrap.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("Styles/css/adminlte.min.css") }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color: #131619">

    <div class="container">
        <div class="login-box" style="margin-left: 385px">
            <div class="login-logo">
              <a href="../../index2.html" style="color: #EE1144">Askfm Clone</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
              <div class="card-body login-card-body">
                <p class="login-box-msg"><h3>login</h3></br>Dont have an account yet?
                    <a href="{{ route('user.showsignup') }}">signup</a></p>

                <form id="" action="{{ route('user.login') }}" method="post">
                    @csrf
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email"
                    value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="rememberme">
                        <label for="rememberme">
                          Remember Me
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                  </a>
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                  </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                  <a href="{{ route('user.forgotpassword') }}">I forgot my password</a>
                </p>

              </div>
              <!-- /.login-card-body -->
            </div>
          </div>
          <!-- /.login-box -->

    </div>
    <!-- jQuery -->
    <script src="{{ asset("Styles/js/jquery.min.js") }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("Styles/js/bootstrap.bundle.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("Styles/js/adminlte.min.js") }}"></script>
</body>
</html>
