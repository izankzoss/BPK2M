<?php
$db = __database();
$where = [
    'id_instansi' => $_GET['id']
];
$query     = __ambil($db, "instansi", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows = $query->fetch_object();
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Instansi</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=instansi&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id_instansi" value="<?php echo $rows->id_instansi; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Instansi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nm_instansi" class="form-control" value="<?php echo $rows->nm_instansi; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="ket_instansi" class="form-control" value="<?php echo $rows->ket_instansi; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=instansi"><i class="fa-solidfa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>