<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="/login-template/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login-template/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="/login-template/css/style.css">
    <title>Login Admin | Sektor Kreatif</title>
  </head>
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('/images/logo_background.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login <strong>Admin</strong></h3>
            <p class="mb-4">Masukkan username dan password.</p>
            @if (session()->has('alert-success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('alert-success')}}
                </div>
            @endif
            @if (session()->has('alert-danger'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('alert-danger')}}
                </div>
            @endif
            @if (session()->has('alert-warning'))
                <div class="alert alert-warning" role="alert">
                    {{session()->get('alert-warning')}}
                </div>
            @endif
            <form autocomplete="off" method="POST" action="/admin/login/process" method="POST">
                {{ csrf_field() }}
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="Username" id="username" name="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="/login-template/js/jquery-3.3.1.min.js"></script>
    <script src="/login-template/js/popper.min.js"></script>
    <script src="/login-template/js/bootstrap.min.js"></script>
    <script src="/login-template/js/main.js"></script>
  </body>
</html>
