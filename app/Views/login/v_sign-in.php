<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url()?>/assets/img/favicon.png">
  <title>
    Login Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url()?>/assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
  <style>
    .login-bg {
      background-image: url('<?= base_url()?>assets/img/flat-lay-workstation-with-copy-space-laptop.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
    }
    
    .login-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(310deg,rgb(0, 0, 0),rgb(38, 38, 38));
      opacity: 0.65;
    }
    
    .card-login {
      background-color: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      z-index: 2;
    }
  </style>
</head>

<body>
  <main class="main-content mt-0">
    <section class="min-vh-100 login-bg d-flex align-items-center">
      <div class="login-overlay"></div>
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <div class="card card-login border-0">
              <div class="card-header pb-0 text-center bg-transparent">
                <h4 class="font-weight-bolder">Sign In</h4>
                <p class="mb-0">Enter your username and password to sign in</p>
              </div>
              <div class="card-body px-4 pt-2">
                <?php
                  if ((session()->getFlashdata('msg') !== null)) {
                    # code...
                    echo session()->getFlashdata('msg');
                  } 
                ?>
                <form action="<?= base_url()?>login" method="post">
                  <div class="mb-3">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" aria-label="Email">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <!--   Core JS Files   -->
  <script src="<?= base_url()?>/assets/js/core/popper.min.js"></script>
  <script src="<?= base_url()?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url()?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url()?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url()?>/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  <script>
    window.setTimeout(function() {
      $('.alert').fadeTo(300, 0).slideUp(300, function () {
        $(this).remove();      
      });  
    }, 1000)
  </script>
</body>

</html>