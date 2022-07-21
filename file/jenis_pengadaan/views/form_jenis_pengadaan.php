<?php
$db = __database();
?>
<div class="card">
    <div class="card-header">
        <h4>Form Pengadaan</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=pengadaan&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    No Barang
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="no_barang" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tgl_pengadaan" class="form-control" />
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
                        $db = __database();
                        $jumlah_data = __ambil($db, "jumlah", "*", $where);
                        while ($r =$jumlah_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['jml_pengadaan']; ?>"><?php echo $r['nama_jumlah']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Sumber Pengadaan
                </label>
                <div class="col-md--6col-sm-6col-lg-12">
                    <input type="sumber_pengadaan" name="sumber_pengadaan" class="form-control" />
                </div>
            </div>

            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=pengadaan"> <i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>