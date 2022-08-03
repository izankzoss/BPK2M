<?php

if (!isset($_GET['target'])) {
?>
    <div class="row">
        <?php
        $db = __database();
        $u = __ambil($db, "user");
        $q = __ambil($db, "asset");
        $p = __ambil($db, "inspeksi");
        $s = __ambil($db, "pengadaan");
        while ($r = $q->fetch_array()) {
            $total = mysqli_num_rows($q);
            $total2 = mysqli_num_rows($p);
            $total1 = mysqli_num_rows($s);
        } ?>
        <section class="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Selamat Datang <?php echo ['$USERNAME'] ?></h1>
                </div>
                <!-- Content Row -->
                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Asset</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <h3><b><?php echo $total; ?></b></h3>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-briefcase fa-2x fas fa-briefcase-300"></i>
                                    </div>
                                    <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'asset' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=asset" class="small-box-footer">Info lebih lanjut<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengadaan
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <h3><b><?php echo $total1; ?></h3></b>
                                                </div>
                                            </div>
                                            <div class="col-auto">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas  fa-shopping-cart fa-2x fas  fa-shopping-cart-300"></i>
                                    </div>
                                    <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'Pengadaan' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=pengadaan" class="small-box-footer">Info lebih lanjut<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Inspeksi</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <h3><b><?php echo $total2; ?></h3></b>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-folder fa-2x fas fa-folder-300"></i>
                                    </div>
                                    <a class="collapse-item" class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'inspeksi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=inspeksi" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>
    <?php
} else {
    $target = $_GET['target'];
    if (empty($target)) {
    ?>
        <script>
            window.location.href = 'admin.php';
        </script>
<?php
    }

    if (!isset($_GET['action'])) {
        getContentAdmin(base_url(), $target);
    } else {
        getContentAdmin(base_url(), $target, $_GET['action']);
    }
}
?>