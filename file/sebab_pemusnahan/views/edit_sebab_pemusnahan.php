<?php
$db = __database();
$where = [
    'id_sebab' => $_GET['id']
];
$query     = __ambil($db, "sebab_pemusnahan", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows       = $query->fetch_object();
// print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Sebab</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=sebab_pemusnahan&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->id_sebab; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Sebab
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="sebab" id="id_sebab" value="<?php echo $rows->sebab; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan Sebab
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="ket_sebab" id="id_sebab" value="<?php echo $rows->ket_sebab; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=sebab_pemusnahan"> <i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>