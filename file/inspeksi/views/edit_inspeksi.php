<?php

$db = __database();
$where = [
    'PELAKSANA' => $_GET['id']
];
$query  = __ambil($db, "inspeksi", "*", $where);
// menampilkan hasil query dalam bentuk object
// anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows      = $query->fetch_object();
// print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Inspeksi</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=inspeksi&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->PELAKSANA; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Pelaksana
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="PELAKSANA" value="<?php echo $rows->PELAKSANA; ?>" required="requerid" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=inspeksi"><i class="fa-solid fa-circle-arrow-left">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>