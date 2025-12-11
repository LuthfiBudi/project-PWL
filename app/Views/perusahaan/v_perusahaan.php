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
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Perusahaan</h6>
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
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content mb-3">
            <a href="<?= base_url()?>/comp/input" class="btn btn-primary">
              <i class="fa fa-plus me-1"></i> Tambah Perusahaan
            </a>
          </div>
          <div class="card mb-4 border border-secondary">
            <div class="card-header pb-0">
              <h6>Tabel Perusahaan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-dark table-hover custom-row-border mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Nama Perusahaan</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($perusahaan as $prsh) {
                      # code...
                    ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $prsh['nm_perusahaan']?></td>
                        <td>
                          <a href="<?= base_url().'comp/edit/'.$prsh['id_perusahaan']?>">
                            <button class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button>
                          </a>
                          <a href="<?= base_url().'comp/hapus/'.$prsh['id_perusahaan']?>">
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

<?= $this->endSection() ?>