<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forgot password</title>
    <!-- Font Awesome -->
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
            <a href="{{ route('user.welcome') }}" style="color: #EE1144"><h3>Askfm Clone</h3></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">E-mail</p>

                    <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Proceed</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    </form>

                    <p class="mt-3 mb-1">
                    <a href="login.html">Login</a>
                    </p>
                    <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                    </p>
                </div>
            <!-- /.login-card-body -->
            </div>
      </div>

    </div>
   </div>
   <!-- jQuery -->
   <script src="{{ asset("Styles/js/jquery.min.js") }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset("Styles/js/bootstrap.bundle.min.js") }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset("Styles/js/adminlte.min.js") }}"></script>
  </body>
</html>
