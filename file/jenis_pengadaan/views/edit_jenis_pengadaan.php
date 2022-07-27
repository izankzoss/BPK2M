<?php
$db = __database();
$where = [
    'id_pengadaan' => $_GET['id']
];
$query     = __ambil($db, "jenis_pengadaan", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows       = $query->fetch_object();
// print_r($rows);
?> <div class="card">
    <div class="card-header">
        <h4>Form Pengadaan</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=jenis_pengadaan&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Id Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="id_pengadaan" class="form-control" value="<?php echo $rows->id_pengadaan; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    No Barang
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nmr_barang" class="form-control" value="<?php echo $rows->nmr_barang; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tgl_pengadaan" class="form-control" value="<?php echo $rows->tgl_pengadaan; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Jumlah Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="jml_pengadaan" class="form-control" value="<?php echo $rows->jml_pengadaan; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Sumber Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="sumber_pengadaan" class="form-control" value="<?php echo $rows->sumber_pengadaan; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" name="password" class="form-control" /> * KOSONGKAN JIKA TIDAK DIRUBAH
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=jenis_pengadaan"><i class="fa-solidfa-circle-arrow-left"></i>   Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>