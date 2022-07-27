<?php
$db = __database();
$where = [
    'ID_PERBAIKAN' => $_GET['id']
];
$query = __ambil($db, "perbaikan", "*", $where);
//menampilkasn hasil query
//gunakan fetch assoc

$rows = $query->fetch_object();
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Perbaikan</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=cara_pemusnahan&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_PERBAIKAN; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Perbaikan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="perbaikan" type="text" name="perbaikan" class="form-control" value="<?php echo $rows->perbaikan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="ket_perbaikan" type="text" name="ket_perbaikan" class="form-control" value="<?php echo $rows->ket_perbaikan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="tgl_perbaikan" type="date" name="tgl_perbaikan" class="form-control" value="<?php echo $rows->tgl_perbaikan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Biaya
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="biaya" type="text" name="biaya" class="form-control" value="<?php echo $rows->ket_perbaikan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=perbaikan">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>