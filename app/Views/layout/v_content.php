<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<main class="main-content position-relative border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
          </li>
          <li class="nav-item ps-3 d-flex align-items-center">
            <form action="<?= base_url()?>logout" method="post" class="d-inline">
              <button type="submit" class="btn btn-sm btn-danger text-white">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Logout</span>
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4 d-flex align-items-center justify-content-center" 
       style="min-height: calc(100vh - 80px);">
    <div class="text-center">
      <h1 class="text-white mb-3">Selamat Datang, Admin!</h1>
      <p class="text-white text-opacity-75 mb-0">
        Kelola data perusahaan, departemen, dan karyawan Anda melalui dashboard ini.
      </p>
    </div>
  </div>
  </main>

<?= $this->endSection() ?>