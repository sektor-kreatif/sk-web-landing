<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  @include('admin.style.style')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        {{-- <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          SK
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Sektor Kreatif
        </a> --}}
        <center><img src="/images/logo_transparant.png" width="150px" style="margin: 10px"></center>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="@yield('active1')">
            <a href="/admin/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="@yield('active2')">
            <a href="/admin/profil">
              <i class="now-ui-icons education_atom"></i>
              <p>Company Profile</p>
            </a>
          </li>
          <li class="@yield('active3')">
            <a href="/admin/article">
              <i class="now-ui-icons location_map-big"></i>
              <p>Article</p>
            </a>
          </li>
          <li class="@yield('active4')">
            <a href="/admin/booking">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Booking List</p>
            </a>
          </li>
          <li class="@yield('active5')">
            <a href="/admin/users">
              <i class="now-ui-icons users_single-02"></i>
              <p>Users</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">@yield('big_title')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Account</span>
                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/admin/profile">Profile</a>
                  <a class="dropdown-item" href="/admin/password">Change Password</a>
                  <a class="dropdown-item" href="/admin/logout">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">@yield('big_title')</h2>
        </div>
      </div>
      <div class="content">
        @if (session()->has('alert-success'))
            <input type = "text" id="alert" value = "{{session()->get('alert-success')}}" hidden>
            <input type = "text" id="state" value = "success" hidden>
            <input type = "text" id="title" value = "Sektor Kreatif Notify" hidden>
        @elseif ($errors->any())
            <input type = "text" id="alert" value = "{{$errors->all()[0]}}" hidden>
            <input type = "text" id="state" value = "danger" hidden>
            <input type = "text" id="title" value = "Sektor Kreatif Notify" hidden>
        @elseif (session()->has('alert-danger'))
            <input type = "text" id="alert" value = "{{session()->get('alert-danger')}}" hidden>
            <input type = "text" id="state" value = "danger" hidden>
            <input type = "text" id="title" value = "Sektor Kreatif Notify" hidden>
        @elseif (session()->has('alert-warning'))
            <input type = "text" id="alert" value = "{{session()->get('alert-warning')}}" hidden>
            <input type = "text" id="state" value = "warning" hidden>
            <input type = "text" id="title" value = "Sektor Kreatif Notify" hidden>
        @else
            <input type = "text" id="alert" value = "null" hidden>
            <input type = "text" id="state" value = "null" hidden>
            <input type = "text" id="title" value = "null" hidden>
        @endif
        @yield('content')
      </div>
      <footer class="footer">
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  @include('admin.script.script')
  <script>
        let message = document.getElementById('alert').value;
        let state = document.getElementById('state').value;
        let title = document.getElementById('title').value;

        if(state !== 'null') {
            notificationAlert(title, message, state);
        }

        function notificationAlert(title, message, state) {
            var placementFrom = 'top';
            var placementAlign = 'right';
            // var state = 'success';
            var style = 'withicon';
            var content = {};

            content.message = message;
            content.title = title;
            if (style == "withicon") {
                content.icon = 'now-ui-icons ui-1_bell-53';
            } else {
                content.icon = 'none';
            }
            content.target = '_blank';

            $.notify(content,{
                type: state,
                placement: {
                    from: placementFrom,
                    align: placementAlign
                },
                time: 1000,
            });
        }
    </script>
</body>
</html>
