<?php
session_start();
include "config/__config_url.php";
include "config/__config_database.php";

if ($_SESSION['status_login'] != true) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplikasi BPK2M</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h4>
                    Aplikasi BPK2M
                </h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo !isset($_GET['target']) || empty($_GET['target']) ? "active" : ""; ?>" href="<?php echo base_url(); ?>">
                        <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>

                    <?php if ($_SESSION['level'] == "admin") { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=asset">
                                <i class="fa-solid"></i>Asset</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'cara' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=cara">
                            <i class="fa-solid "></i>Cara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'inspeksi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=inspeksi">
                                <i class="fa-solid "></i>Inspeksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'jenis' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=jenis">
                                <i class="fa-solid"></i>Jenis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'jenis asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=jenis asset">
                            <i class="fa-solid "></i>Jenis Asset</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'keadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=keadaan">
                                <i class="fa-solid "></i>Keadaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'no registrasi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=no registrasi">
                                <i class="fa-solid "></i>No Registrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'pemusnahan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=pemusnahan">
                            <i class="fa-solid "></i>Pemusnahan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'pengadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=pengadaan">
                                <i class="fa-solid "></i>Pengadaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'perbaikan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=perbaikan">
                                <i class="fa-solid "></i>Perbaikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'sebab' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=sebab">
                            <i class="fa-solid "></i>Sebab</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'tempat' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=tempat">
                                <i class="fa-solid "></i>Tempat</a>
                        </li>
                    <?php } ?>
                    <?php if ($_SESSION['level'] == "asset") { ?>
                        
                    <?php } ?>
                </ul>
            </div>

            <div class="d-flex">
                <a href="<?php echo base_url(); ?>logout.php" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
    </nav>
    <div class="clearfix">&nbsp;</div>
    <div class="container">
        <?php include_once "content.php"; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
    <script src="https:cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https:cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://kit.fontawesome.com/4af1d56044.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('.table').DataTable();
        });
    </script>
</body>
</html>