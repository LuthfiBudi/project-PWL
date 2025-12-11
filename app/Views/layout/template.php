<!--
=========================================================
* Argon Dashboard 3 - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url()?>assets/img/favicon.png">
  <title>
    Company's Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url()?>assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

  <style>
    .custom-row-border tbody tr {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* subtle light border */
    }

    /* Hover effect for nav items */
    .navbar-nav .nav-item .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 0.5rem;
      transition: all 0.3s ease;
    }

        /* Active state for nav items */
        .navbar-nav .nav-item .nav-link.active {
          background-color: rgba(255, 255, 255, 0.2);
          border-radius: 0.5rem;
          font-weight: 600;
        }

        /* Optional: Change icon opacity on hover and active state */
        .navbar-nav .nav-item .nav-link:hover .icon i,
        .navbar-nav .nav-item .nav-link.active .icon i {
          opacity: 1 !important;
        }
    #sidenav-main {
      background-color:rgb(19, 46, 80) !important; /* or your preferred dark color */
    }
    .sidenav .nav-link.active {
      background-color:rgb(77, 103, 129) !important;  /* Your preferred dark bg */
      color: #ffffff !important;             /* White text */
    }

  </style>
</head>

<body class="g-sidenav-show bg-dark text-white dark-version">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-dark navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="<?= base_url()?>assets/img/logo-ct.png" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Company's Admin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" id="dashboard-link" href="<?= base_url()?>dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="comp-link" href="<?= base_url()?>comp">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-building text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Perusahaan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="dept-link" href="<?= base_url()?>dept">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-briefcase-24 text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Departemen</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="employee-link" href="<?= base_url()?>employee">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-white text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Karyawan</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  //ANCHOR - Content
  <?= $this->renderSection('content')?>

  <!--   Core JS Files   -->
  <script src="<?= base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url()?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?= base_url()?>assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- additional script -->
  <script>
    // Function to set active state based on current URL
    function setActiveNavItem() {
    // Get current URL path
    const currentPath = window.location.pathname;
    console.log("Current path:", currentPath); // For debugging
    
    // Get all nav links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    // Remove active class from all links
    navLinks.forEach(link => {
      link.classList.remove('active');
    });
    
    // Add active class to the link that matches current URL
    let activeFound = false;
    navLinks.forEach(link => {
      const href = link.getAttribute('href');
      console.log("Checking link:", href); // For debugging
      
      // Check if current path matches or contains this link's path
      if (currentPath === href || 
          currentPath.endsWith(href.replace('<?= base_url()?>', '')) || 
          currentPath.includes(href.replace('<?= base_url()?>', '/'))) {
        link.classList.add('active');
        activeFound = true;
        console.log("Match found for:", href); // For debugging
      }
    });
    
    // Special case for dashboard - if no other matches and we're at root or dashboard
    if (!activeFound && 
        (currentPath === '/' || 
        currentPath === '' || 
        currentPath === '/index.php' || 
        currentPath.endsWith('/dashboard') || 
        currentPath.endsWith('/index'))) {
      const dashboardLink = document.querySelector('a[href="<?= base_url()?>dashboard"]');
      if (dashboardLink) {
        dashboardLink.classList.add('active');
        console.log("Applied dashboard default active state"); // For debugging
      }
    }
  }

  // Run when the page loads
  document.addEventListener('DOMContentLoaded', function() {
    // Get current path - normalize by removing trailing slash
    let currentPath = window.location.pathname;
    if (currentPath.endsWith('/')) {
      currentPath = currentPath.slice(0, -1);
    }
    
    // Create a mapping of controllers to their corresponding links
    const controllerMap = {
      'dashboard': document.getElementById('dashboard-link'),
      'comp': document.getElementById('comp-link'), 
      'dept': document.getElementById('dept-link'),
      'employee': document.getElementById('employee-link')
    };
    
    // First remove all active classes
    Object.values(controllerMap).forEach(link => {
      if (link) link.classList.remove('active');
    });
    
    // Check if path contains any of our controllers
    let activeController = null;
    for (const [controller, link] of Object.entries(controllerMap)) {
      if (currentPath.includes(controller)) {
        activeController = controller;
        if (link) link.classList.add('active');
        break;
      }
    }
    
    // Special case for root/index (should activate dashboard)
    if (!activeController && (currentPath === '' || currentPath === '/' || 
        currentPath.endsWith('/index.php') || currentPath.endsWith('/index'))) {
      const dashboardLink = document.getElementById('dashboard-link');
      if (dashboardLink) dashboardLink.classList.add('active');
    }
    
    // For PHP debugging if needed
    console.log('Current path:', currentPath);
    console.log('Active controller:', activeController);
  });
  </script>

  <!-- Github buttons -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url()?>assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>