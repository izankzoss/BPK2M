<?php
$db = __database();
$where = [
    'NO_ASSET' => $_GET['id']
];
$query = __ambil($db, "asset", "*", $where);
//menampilkasn hasil query
//gunakan fetch assoc

$rows = $query->fetch_object();
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Asset</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=asset&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->NO_ASSET; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Barang
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="kd_prodi" type="text" name="nm_barang" class="form-control" value="<?php echo $rows->nm_barang; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Spesifikasi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="spesifikasi" id="spesifikasi" value="baru">
                        <label for="spesifikasi" class="form-check-label">
                            Baru
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="spesifikasi" id="spesifikasi" value="bekas">
                        <label for="spesifikasi" class="form-check-label">
                            Bekas
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Jumlah
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="jumlah" type="text" name="jumlah" class="form-control" value="<?php echo $rows->jumlah; ?>" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Harga
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="jumlah" type="text" name="harga" class="form-control" value="<?php echo $rows->harga; ?>" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Terima
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="jumlah" type="date" name="tgl_terima" class="form-control" value="<?php echo $rows->tgl_terima; ?>" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=asset">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>