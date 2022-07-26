<?php
include "config/__config_url.php";
include "config/__config_database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to- fit=no">
    <title>Aplikasi BPK2M</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Aplikasi BPK2M</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data- target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria- expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=asset">Asset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'cara_pemusnahan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=cara_pemusnahan">Cara Pemusnahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'inspeksi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=inspeksi">Inspeksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'jenis' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=jenis_asset">Jenis Asset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'jenis asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=jenis_pemusnahan">
                            <i class="fa-solid fa-book"></i>Jenis Asset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'keadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=keadaan">Keadaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'no registrasi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=no registrasi">No Registrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'pemusnahan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=pemusnahan">Pemusnahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'pengadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=pengadaan">Pengadaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'perbaikan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=perbaikan">Perbaikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'sebab' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=sebab">Sebab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'tempat' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=tempat">Tempat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="clearfix">&nbsp;</div>
    <div class="container">
        <?php include_once "content.php"; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0- beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>