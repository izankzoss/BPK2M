<?php
$db = __database();
$where = [
    'ID_PENGADAAN' => $_GET['id']
];
$query     = __ambil($db, "pengadaan", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows       = $query->fetch_object();
// print_r($rows);
?> <div class="card">
    <div class="card-header">
        <h4>Form Pengadaan</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=pengadaan&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Id Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="id_pengadaan" class="form-control" value="<?php echo $rows->ID_PENGADAAN; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first_name">
                    Jenis Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_jenis" id="id_jenis" class="form-select">
                        <option value="">Jenis Pengadaan</option>
                        <?php
                        $pengadaan_data = __ambil($db, "jenis_pengadaan", "*");
                        while ($p = $pengadaan_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $p['ID_JENIS']; ?>" <?php echo $rows->ID_JENIS == $p['JENIS_PENGADAAN'] ? "selected" : ""; ?>> <?php echo $p['JENIS_PENGADAAN']; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first_name">
                    Instansi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_instansi" id="id_instansi" class="form-select">
                        <option value="">Pilih Instansi</option>
                        <?php
                        $instansi_data = __ambil($db, "instansi", "*");
                        while ($r = $instansi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['ID_INSTANSI']; ?>" <?php echo $rows->ID_INSTANSI == $r['NM_INSTANSI'] ? "selected" : ""; ?>> <?php echo $r['NM_INSTANSI']; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tgl_pengadaan" class="form-control" value="<?php echo $rows->TGL_PENGADAAN; ?>" />
                </div>
            </div>

            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=pengadaan"><i class="fa-solidfa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>