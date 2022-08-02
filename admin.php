<?php
include "config/config_url.php";
include "config/config_database.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi BPK2M</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="">Aplikasi BPK2M</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-briefcase "></i>
                    <span>Asset</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" >Asset</h6>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=asset" aria-expanded="true" aria-controls="collapseTwo">Asset</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'jenis_asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=jenis_asset" aria-expanded="true" aria-controls="collapseTwo">Jenis Asset</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'instansi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=instamsi" aria-expanded="true" aria-controls="collapseTwo">Instansi</a> 
                    </div>
                </div>
            </li>
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas  fa-shopping-cart"></i>
                    <span>Pengadaan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" >Pengadaan</h6>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'pengadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=pengadaan" aria-expanded="true" aria-controls="collapseTwo">Pengadaan</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'jenis_pengadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=jenis_pengadaan" aria-expanded="true" aria-controls="collapseTwo">Jenis Pengadaan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethre"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-folder"></i>
                    <span>Inspeksi</span>
                </a>
                <div id="collapsethre" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" >Inspeksi</h6>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'inspeksi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=inspeksi" aria-expanded="true" aria-controls="collapseTwo">Inspeksi</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'keadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=keadaan" aria-expanded="true" aria-controls="collapseTwo">Keadaan</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'perbaikan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=perbaikan" aria-expanded="true" aria-controls="collapseTwo">Perbaikan</a> 
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-trash"></i>
                    <span>Pemusnahan</span>
                </a>
                <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" >Pemusnahan</h6>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'pemusnahan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=pemusnahan" aria-expanded="true" aria-controls="collapseTwo">Pemusnahan</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'cara_pemusnahan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=cara_pemusnahan" aria-expanded="true" aria-controls="collapseTwo">Cara Pemusnahan</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'sebab_pemusnahan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=sebeb_pemusnahan" aria-expanded="true" aria-controls="collapseTwo">Sebab Pemusnahan</a> 
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefaif"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-atlas"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsefaif" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" >Laporan</h6>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'laporan_asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=laporan_asset" aria-expanded="true" aria-controls="collapseTwo">Laporan Asset</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'laporan_pengadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=laporan_pengadaan" aria-expanded="true" aria-controls="collapseTwo">Laporan Pengadaan</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'laporan_inspeksi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=laporan_inspeksi" aria-expanded="true" aria-controls="collapseTwo">Laporan Inspeksi</a>
                        <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'laporan_pemusnahan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=laporan_pemusnahan" aria-expanded="true" aria-controls="collapseTwo">Laporan Pemusnahan</a> 
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'users' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=users">
                    <i class="fas fa-user"></i>User</a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="clearfix">&nbsp;</div>
                <div class="container">
                    <?php include_once "content.php"; ?>
                </div>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <a class="btn btn-primary" href="login.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>