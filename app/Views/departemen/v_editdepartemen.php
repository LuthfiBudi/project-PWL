<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Departemen</li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Departemen</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Edit Departemen</h6>
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
            <h4 class="text-white">Edit Departemen?</h4>
          </div>
          <div class="card-body">
            <form action="<?= base_url()?>dept/update" method="post">
              <?php
                foreach ($departemen as $dpt) {
                  # code...
                
              ?>
              <div class="mb-3">
                <label for="nama_perusahaan" class="form-label text-white">Kode/ID Departemen</label>
                <input readonly type="text" value="<?= $dpt['id_departemen']?>" class="form-control bg-transparent text-muted border border-white" id="id_departemen" name="id_departemen" placeholder="Masukkan kode/id departemen" required>
              </div>
              <div class="mb-3">
                <label for="nama_departemen" class="form-label text-white">Nama Departemen</label>
                <input type="text" value="<?= $dpt['nm_departemen']?>" class="form-control bg-transparent text-white border border-white" id="nm_departemen" name="nm_departemen" placeholder="Masukkan nama perusahaan" required>
              </div>
              <div class="mb-3">
                <label for="nama_departemen" class="form-label text-white">Nama Perusahaan</label>
                <select name="id_perusahaan" id="id_perusahaan" class="form-control bg-light border border-white" required>
                  <option value="">.:PILIH PERUSAHAAN:.</option>
                  <?php 
                    foreach ($perusahaan as $prsh) {
                      # code...
                    if ($prsh['id_perusahaan'] == $dpt['id_perusahaan']) {
                      # code...
                    
                  ?>
                    <option value="<?= $prsh['id_perusahaan']?>" selected>
                      <?= $prsh['nm_perusahaan']?>
                    </option>
                  <?php
                    } else {
                  ?>
                    <option value="<?= $prsh['id_perusahaan']?>">
                      <?= $prsh['nm_perusahaan']?>
                    </option>
                    <?php
                    } }
                    ?>
                </select>
              </div>

              <div class="d-flex justify-content-end">
                <a href="<?= base_url()?>/dept" class="btn btn-secondary me-2">Batal</a>
                <button type="submit" class="btn btn-warning">Update</button>
              </div>
              <?php
                }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?= $this->endSection() ?>