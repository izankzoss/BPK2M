<?php
$db = __database();
$where = [
    'kode_barang' => $_GET['id']
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
        <form method="post" action="admin.php?target=pengadaan&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kode Barang
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kode_barang" class="form-control" value="<?php echo $rows->kode_barang; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Barang
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $rows->nama_barang; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="tgl_pengadaan" id="tgl_pengadaan" class="form-select">
                        <option value="">Pilih Tanggal</option>
                        <?php
                        $where_smt = [
                            'jml_pengadaan' => $_SESSION['id']
                        ];
                        $tanggal_data = __ambil($db, "tanggal", "*", $where_smt);
                        while ($s = $tanggal_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['tgl_pengadaan']; ?>" <?php echo $s['tgl_pengadaan'] == $rows->tgl_pengadaan ? "selected" : "" ?>>
                                <?php echo $s['tanggal']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Jumlah Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="jml_pengadaan" id="jml_pengadaan" class="form-select">
                        <option value="">Pilih Jumlah</option>
                        <?php
                        $where_jumlah = [
                            'jml_pengadaan' => $_SESSION['id']
                        ];
                        $jumlah_data = __ambil($db, "jumlah", "*", $where_jumlah);
                        while ($r = $jumlah_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['jml_pengadaan']; ?>" <?php echo $r['jml_pengadaan'] == $rows->jml_pengadaan ? "selected" : "" ?>>
                                <?php echo $r['jml_pengadaan']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Sumber Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="sumber_pengadaan" name="sumber_pengadaan" class="form-control" /> * KOSONGKAN JIKA TIDAK DIRUBAH
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=pengadaan"><i class="fa-solidfa-circle-arrow-left"></i>   Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>