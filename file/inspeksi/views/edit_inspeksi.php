<?php
$db = __database();
$where = [
    'ID_INSPEKSI' => $_GET['id']
];
$query = __ambil($db, "inspeksi", "*", $where);
// menampilkan hasil query dalam bentuk object
// anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows     = $query->fetch_object();
// print_r($rows);
?> <div class="card">
    <div class="card-header">
        <h4>Edit Inspeksi</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=inspeksi&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_INSPEKSI; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first_name">
                    Keadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="ID_KEADAAN" id="ID_KEADAAN" class="form-select">
                        <option value="">Pilih Instansi</option>
                        <?php
                        $instansi_data = __ambil($db, "keadaan", "*");
                        while ($r = $instansi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['ID_KEADAAN']; ?>" <?php echo $rows->ID_KEADAAN == $r['KEADDAN'] ? "selected" : ""; ?>> <?php echo $r['KEADAAN']; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first_name">
                    Perbaikan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="ID_PERBAIKAN" id="ID_PERBAIKAN" class="form-select">
                        <option value="">Pilih Instansi</option>
                        <?php
                        $instansi_data = __ambil($db, "perbaikan", "*");
                        while ($r = $instansi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['ID_PERBAIKAN']; ?>" <?php echo $rows->ID_PERBAIKAN == $r['PERBAIKAN'] ? "selected" : ""; ?>> <?php echo $r['PERBAIKAN']; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Pelaksana
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="jumlah" type="text" name="jumlah" class="form-control" value="<?php echo $rows->jumlah; ?>" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Terima
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="tgl_terima" type="date" name="tgl_terima" class="form-control" value="<?php echo $rows->tgl_terima; ?>" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=inspeksi"><i class="fa-solidfa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>