<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CENICOM | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <img src="../img/prod-1.jpg" alt="prod-1" class="profile-user-img img-fluid img-circle">
      <a href="../index.php" class="h1"><b>CENICOM</b>SAS</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicie la Sesión</p>

      <form id="form-login">
            <div class="input-group mb-3">
                <input id="user" type="text" class="form-control" placeholder="User Name..." required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input id="pass" type="password" class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="social-auth-links text-center mt-2 mb-3">
                <botton type="submit" class="btn btn-block btn-primary">
                    Iniciar Sesión
                </botton>
            </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.php">Olvide Mi Password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>

<script src="login.js"></script>
</body>
</html>
