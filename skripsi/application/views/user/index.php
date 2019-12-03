<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('aset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('aset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">


  <style type="text/css">
    /* body {
      background-color: #00b4c4;
    } */

    .navbar {
      background-color: #00b4c4;
    }

    .bg-user {
      background-color: #ff7373;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <img src="https://freeiconshop.com/wp-content/uploads/edd/gift-flat.png" style="height: 150px;" alt="...">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-auto text-dark">
        <div class="text-center">
          <h3>SISTEM INFORMASI KEPENDUDUKAN</h3>
          <h3>RUMAH SUSUN KLENDER</h3>
          <br/>
        <div class="bg-user">
          <h3>Kelurahan Malaka Jaya, Kecamatan Duren Sawit</h3>
          <h3>RT 004, RW 02, Klender, Pondok Kopi, Jakarta Timur</h3>
        </div>

        </div>
      </ul>
      <!-- Nav Item - User Information -->
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile" style="height: 150px;" src="<?= base_url('aset/img/profil/') . $user['image'];  ?>">
                <br/>
                <span class="text-dark d-none d-lg-inline"><?= $user['nama']; ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout');  ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>


              <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout');  ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

    </div>
  </nav>

<!-- batas -->
  <ul class="nav nav-pills nav-fill" style="background-color: #e3f2fd;">
  <li class="nav-item">
    <a class="nav-link active">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Berita</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Info Rumah</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Layanan Masyarakat</a>
  </li>
  </ul>
    <br/>
    <div class="float-left">
      <button type="button" style="height:150px; width:550px;" >
        <h5>Sejarah</h5>
        <h5>Rumah Susun</h5>
      </button>
    </div>
    <div class="float-right">
      <button type="button"  style="height:150px; width:550px;" >
        <h5>Sejarah</h5>
        <h5>Rumah Susun</h5>
      </button>
    </div>
    <div style="margin-up:10px;" >
      <button class="mx-auto d-block" type="button"  style="height:150px; width:550px; margin-up:10px;" >
        <h5>Sejarah</h5>
        <h5>Rumah Susun</h5>
      </button>
    </div>
















  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('aset/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('aset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('aset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('aset/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
