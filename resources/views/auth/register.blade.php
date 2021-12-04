
<!--
 =========================================================
 Material Dashboard PRO - v2.1.0
 =========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard-pro
 Copyright 2019 Creative Tim (https://www.creative-tim.com)

 Coded by Creative Tim

 =========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 08:38:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('style/adminty')}}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{url('style/adminty')}}/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Register Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="{{url('style/adminty')}}/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{url('style/adminty')}}/css/material-dashboard.minf066.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{url('style/adminty')}}/img/register.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="post" action="{{ url('register/store') }}">
              {{ csrf_field() }}
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Sign Up</h4>
                </div>
                <div class="card-body">
                  <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">face</i>
                            </span>
                        </div>
                        <input name="username" id="username" type="username" class="form-control" placeholder="Username" required value="{{ old('username') }}">
                    </div>
                </span>
                <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">face</i>
                            </span>
                        </div>
                        <input name="name" id="name" type="name" class="form-control" placeholder="Full Name" required value="{{ old('name') }}">
                    </div>
                </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input name="email" id="email" type="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">face</i>
                            </span>
                        </div>
                        <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone" required value="{{ old('phone') }}">
                    </div>
                </span>
                <span class="bmd-form-group">
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="material-icons">face</i>
                          </span>
                      </div>
                      <input name="country" id="country" type="text" class="form-control" placeholder="Country" required value="{{ old('phone') }}">
                  </div>
              </span>
              <span class="bmd-form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">face</i>
                        </span>
                    </div>
                    <input name="city" id="city" type="text" class="form-control" placeholder="City" required value="{{ old('phone') }}">
                </div>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">face</i>
                      </span>
                  </div>
                  <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Postcode" required value="{{ old('phone') }}">
              </div>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">face</i>
                      </span>
                  </div>
                  <input name="address" id="address" type="text" class="form-control" placeholder="Address" required value="{{ old('phone') }}">
              </div>
            </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                    </div><br>
                  </span>
                  <a href="{{ url('/') }}" class="text-center col-sm-10">I already have a Account</a>
                </div>
                <div class="card-footer justify-content-center">
                  <button class="btn btn-rose btn-link btn-lg">Register</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>{{-- 
      <footer class="footer">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com/">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com/">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer> --}}
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url('style/adminty')}}/js/core/jquery.min.js"></script>
  <script src="{{url('style/adminty')}}/js/core/popper.min.js"></script>
  <script src="{{url('style/adminty')}}/js/core/bootstrap-material-design.min.js"></script>
  <script src="{{url('style/adminty')}}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="{{url('style/adminty')}}/buttons.github.io/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="{{url('style/adminty')}}/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('style/adminty')}}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('style/adminty')}}/js/material-dashboard.minf066.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url('style/adminty')}}/demo/demo.js"></script>
  <!-- Sharrre libray -->
  <script src="{{url('style/adminty')}}/demo/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 08:38:06 GMT -->
</html>

