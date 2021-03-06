<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
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
        <div class="register-box" style="margin-left: 385px">
            <div class="register-logo">
              <a href="{{ route('user.welcome') }}" style="color: #EE1144">Askfm Clone</a>
            </div>

            <div class="card">
              <div class="card-body register-card-body">
                <p class="login-box-msg"><h3>Sign up</h3></br>have an account already?
                    <a href="{{ route('user.showlogin') }}">login</a></p>

                <form action="{{ route('user.signup') }}" method="post">
                    @csrf
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Full Name"
                    value="{{ old('name') }}" required >
                    @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email"
                    value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password"
                    value="{{ old('password') }}" required >
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password"
                    value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                         I agree to the <a href="#">terms</a>
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>

                <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                  </a>
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                  </a>
                </div>

              </div>
              <!-- /.form-box -->
            </div><!-- /.card -->
          </div>
          <!-- /.register-box -->

    </div>
    <!-- jQuery -->
    <script src="{{ asset("Styles/js/jquery.min.js") }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("Styles/js/bootstrap.bundle.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("Styles/js/adminlte.min.js") }}"></script>
</body>
</html>
