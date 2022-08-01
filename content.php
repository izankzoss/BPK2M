<?php

if (!isset($_GET['target'])) {
?>
    <div class="row">
        <?php
        $db = __database();
        $q = __ambil($db, "asset");
        $p = __ambil($db, "inspeksi");
        $s = __ambil($db, "pengadaan");
        $n = __ambil($db, "pemusnahan");
        while ($r = $q->fetch_array()) {
            $total = mysqli_num_rows($q);
            $total2 = mysqli_num_rows($p);
            $total1 = mysqli_num_rows($s);
            $total3 = mysqli_num_rows($n);
        } ?>
        <section class="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
                <!-- Content Row -->
                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Asset</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h3><b><?php echo $total; ?></b></h3></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-briefcase fa-2x fas fa-briefcase-300"></i>
                                    </div>
                                    <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h3><b><?php echo $total2; ?></h3></b></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-folder fa-2x fas fa-folder-300"></i>
                                    </div>
                                        <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><h3><b><?php echo $total1; ?></h3></b></div>
                                                </div>
                                                <div class="col">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas  fa-shopping-cart fa-2x fas  fa-shopping-cart-300"></i>
                                        </div>
                                        <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pemusnahan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><h3><b><?php echo $total3; ?></h3></b></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-trash fa-2x fas fa-trash-300"></i>
                                        </div>
                                        <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
    