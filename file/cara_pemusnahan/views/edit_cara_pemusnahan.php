<?php
$db = __database();
$where = [
    'ID_CARA' => $_GET['id']
];
$query = __ambil($db, "cara_pemusnahan", "*", $where);
//menampilkasn hasil query
//gunakan fetch assoc

$rows = $query->fetch_object();
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Cara Pemusnahan</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=cara_pemusnahan&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_CARA; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Cara Pemusnahan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="cara" type="text" name="cara" class="form-control" value="<?php echo $rows->cara; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="ket_cara" type="text" name="ket_cara" class="form-control" value="<?php echo $rows->ket_cara; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=cara_pemusnahan">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>