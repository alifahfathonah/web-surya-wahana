<?php include 'update-produk.php'; ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | CV. Surya Wahana</title>

    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">CV. Surya Wahana</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <div class="input-group-append">
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Admin</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../index.php">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>Klien</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../../database/produk/data-produk.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Produk</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../database/mitra/data-mitra.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Mitra</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../database/pegawai/data-pegawai.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Pegawai</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../database/pesanan/data-pesanan.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Pesanan</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>Database</a>
            </li>
            <li class="breadcrumb-item active">produk</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>  Ubah Produk
          </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body card-block">
                  <form action="update-produk.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <!-- ID -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="disabled-input" class="form-control-label">ID</label>
                    </div>
                    <div class="col-12 col-md-9">
                      <input type="text" id="disabled-input" class="form-control" name="id-produk" placeholder="" readonly="" value="<?php if(isset($_GET['id_produk'])){echo $_GET['id_produk'];} ?>">
                    </div>
                  <div>
                    <?php
                    include '../../../connect.php';
                    $query = "SELECT * FROM produk WHERE ID_PRODUK={$_GET['id_produk']}";
                    $result = $myPDO->prepare($query);
                    $result->execute();
                    $data  = $result->fetch();
                    //echo json_encode($result);
                  ?>
                  </div>
                  </div>
                  <!-- Nama -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="nama-produk" placeholder="Name" class="form-control" value="<?php echo $data['NAMA_PRODUK'] ?>">
                      <small class="form-text text-muted">Masukkan nama produk</small>
                    </div>
                  </div>
                  <!-- Mitra -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="select" class=" form-control-label">Mitra Penyedia</label>
                    </div>
                    <div class="col-12 col-md-9">
                      <?php 
                        include '../../../connect.php';
                        $q  = 'SELECT * FROM mitra';
                        $reslt = $myPDO->prepare($q);
                        $reslt->execute(); 
                        echo "<select name='mitra-produk' id='select' class='form-control'>";
                        while ($hasil = $reslt->fetch()) {
                          echo "<option label='{$hasil['NAMA_MITRA']}' values='{$hasil['ID_MITRA']}'>{$hasil['ID_MITRA']}</option>";
                        }
                        echo "</select>";
                      ?>
                        
                    </div>
                  </div>
                  <!-- Jenis -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Jenis</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="jenis-produk" placeholder="Type" class="form-control" value="<?php echo $data['JENIS_PRODUK'] ?>">
                      <small class="form-text text-muted">Masukkan jenis produk</small>
                    </div>
                  </div>
                  <!-- Harga -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Harga</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="harga-produk" placeholder="Price" class="form-control" value="<?php echo $data['HARGA_PRODUK'] ?>">
                      <small class="form-text text-muted">Masukkan harga produk</small>
                    </div>
                  </div>
                  <!-- end form -->
                  <div class="card-footer">
                    <button type="submit" name="btn-submit" class="btn btn-primary btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                  </div>
                </form>
                </div>                
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

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
            <a class="btn btn-primary" href="../../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../js/demo/datatables-demo.js"></script>

  </body>

</html>
