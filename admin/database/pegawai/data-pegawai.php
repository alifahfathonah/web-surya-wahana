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

      <a class="navbar-brand mr-1" href="../../../index.html">CV. Surya Wahana</a>

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
        <li class="nav-item">
          <a class="nav-link" href="../produk/data-produk.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Produk</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../mitra/data-mitra.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Mitra</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="data-pegawai.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Pegawai</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pesanan/data-pesanan.php">
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
            <li class="breadcrumb-item active">Pegawai</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>Data Pegawai
              <a class="btn btn-primary" href="../../form/pegawai/new-pegawai.php" style="margin-left: 875px" >ADD</a>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
                  include '../../../connect.php';
                  $query = 'SELECT * FROM pegawai';
                  $result = $myPDO->prepare($query);
                  $result->execute();
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>No KTP</th>
                      <th>Nama</th>
                      <th>No Telp</th>
                      <th>Alamat</th>
                      <th>Menu</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($hasil = $result->fetch()){ ?>
                    <tr>
                      <td>
                        <p>
                          <?php echo $hasil['ID_PEGAWAI'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['KTP_PEGAWAI'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['NAMA_PEGAWAI'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['NOTELP_PEGAWAI'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['ALAMAT_PEGAWAI'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <a href="../../form/pegawai/edit-pegawai.php?id_pegawai=<?php echo $hasil['ID_PEGAWAI'] ?>">Ubah</a>
                        </p>
                        <p>
                          <a href="#" data-toggle="modal" data-id=<?php echo $hasil['ID_PEGAWAI'];  ?> data-target="#deleteModal" class="btn-delete">Hapus</a>
                        </p>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
                
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
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Klik "Logout" jika ingin mengakhiri.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah ingin menghapus data?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Klik "Ya" jika ingin menghapus</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
            <a class="btn btn-primary" id="link-delete" href="delete-pegawai.php">Ya</a>
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
    <script src="delete-script.js"></script>

  </body>

</html>
