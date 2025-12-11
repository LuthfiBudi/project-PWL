<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Perusahaan</li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Input Perusahaan</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Input Perusahaan</h6>
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
    <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card bg-dark text-white border-radius-lg shadow">
          <div class="card-header pb-0">
            <h4 class="text-white">Tambah Perusahaan?</h4>
          </div>
          <div class="card-body">
            <form action="<?= base_url()?>comp/save" method="post">
              <div class="mb-3">
                <label for="nama_perusahaan" class="form-label text-white">Kode/ID Perusahaan</label>
                <input type="text" class="form-control bg-transparent text-white border border-white" id="id_perusahaan" name="id_perusahaan" placeholder="Masukkan kode/id perusahaan" required>
              </div>
              <div class="mb-3">
                <label for="nama_perusahaan" class="form-label text-white">Nama Perusahaan</label>
                <input type="text" class="form-control bg-transparent text-white border border-white" id="nm_perusahaan" name="nm_perusahaan" placeholder="Masukkan nama perusahaan" required>
              </div>

              <div class="d-flex justify-content-end">
                <a href="<?= base_url()?>/comp" class="btn btn-secondary me-2">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?= $this->endSection() ?>