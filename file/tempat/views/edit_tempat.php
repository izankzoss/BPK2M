<?php
$db = __database();
$where = [
    'id_tempat' => $_GET['id']
];
$query     = __ambil($db, "tempat", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows       = $query->fetch_object();
// print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Tempat</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=tempat&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->id_tempat; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tempat Simpan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="name_tempat" id="id_tempat" value="<?php echo $rows->nama_tempat; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan Tempat
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="name_keterangan" id="id_tempat" value="<?php echo $rows->nama_tempat; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Password
                </label>
                <div class="col-md-6col-sm-6col-lg-12">
                    <input type="password" id="password" name="password"> * KOSONGKAN JIKA TIDAK DIRUBAH
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=tempat"> <i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>