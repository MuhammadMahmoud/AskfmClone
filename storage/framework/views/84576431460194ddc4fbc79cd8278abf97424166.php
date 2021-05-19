<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <link rel="stylesheet" href="<?php echo e(asset("Styles/css/all.min.css")); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset("Styles/css/icheck-bootstrap.min.css")); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset("Styles/css/adminlte.min.css")); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color: #131619">
    <div class="container">
        <div class="register-box" style="margin-left: 385px">
            <div class="register-logo">
              <a href="../../index2.html" style="color: #EE1144">Askfm Clone</a>
            </div>

            <div class="card">
              <div class="card-body register-card-body">
                <p class="login-box-msg"><h3>Sign up</h3></br>have an account already?
                    <a href="<?php echo e(route('user.showlogin')); ?>">login</a></p>

                <form action="../../index.html" method="post">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password">
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
    <script src="<?php echo e(asset("Styles/js/jquery.min.js")); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset("Styles/js/bootstrap.bundle.min.js")); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset("Styles/js/adminlte.min.js")); ?>"></script>
</body>
</html>
<?php /**PATH E:\wamp\www\AskfmClone\resources\views/signup.blade.php ENDPATH**/ ?>