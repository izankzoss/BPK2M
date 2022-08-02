<?php
$db = __database();
$where = [
    'ID_PERBAIKAN' => $_GET['id']
];
$query = __ambil($db, "perbaikan", "*", $where);
// menampilkan hasil query dalam bentuk object
// anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows     = $query->fetch_object();
// print_r($rows);
?> <div class="card">
    <div class="card-header">
        <h4>Edit Keadaan</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=perbaikan&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_PERBAIKAN; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Perbaikan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="PERBAIKAN" class="form-control" value="<?php echo $rows->PERBAIKAN; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="KET_PERBAIKAN" class="form-control" value="<?php echo $rows->KET_PERBAIKAN; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="date" name="TGL_PERBAIKAN" class="form-control" value="<?php echo $rows->TGL_PERBAIKAN; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Biaya
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="BIAYA" class="form-control" value="<?php echo $rows->BIAYA; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=keadaan"><i class="fa-solidfa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>