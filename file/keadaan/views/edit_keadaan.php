<?php
$db = __database();
$where = [
    'ID_KEADAAN' => $_GET['id']
];
$query = __ambil($db, "keadaan", "*", $where);
//menampilkasn hasil query
//gunakan fetch assoc

$rows = $query->fetch_object();
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Keadaan</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=keadaan&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_KEADAAN; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="keadaan" type="text" name="keadaan" class="form-control" value="<?php echo $rows->keadaan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="ket_keadaan" type="text" name="ket_keadaan" class="form-control" value="<?php echo $rows->ket_keadaan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=keadaan">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>