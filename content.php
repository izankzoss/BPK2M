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
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $total; ?></h3>
                    <p>Asset</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $total2; ?></h3>
                    <p>Inspeksi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $total1; ?></h3>
                    <p>Pengadaan</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $total3; ?></h3>
                    <p>Pemusnahan</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="karyawan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
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