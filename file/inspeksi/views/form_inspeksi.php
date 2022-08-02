<?php
$db = __database();
?>
<div class="card">
    <div class="card-header">
        <h4>Form Inspeksi</h4>
    </div>
    <div class="card-body">
    <form method="post" action="admin.php?target=inspeksi&action=input" data-parsley-validate class="form-horizontal form-label-left">
    <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
               Id Inspeksi
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
                <input type="text" name="ID_INSPEKSI" class="form-control" />
            </div> 
        </div>
        <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                   Keadaan
                </label>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_keadaan" id="id_keadaan" class="form-select">
                        <option value="">Pilih Keadaan</option>
                        <?php
                        $db = __database();
                        $instansi_data = __ambil($db, "keadaan");
                        while ($s = $instansi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['ID_KEADAAN']; ?>"><?php echo $s['KEADAAN']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
            <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                   Perbaikan
                </label>
            </div>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_perbaikan" id="id_perbaikan" class="form-select">
                        <option value="">Pilih Perbaikan</option>
                        <?php
                        $db = __database();
                        $instansi_data = __ambil($db, "perbaikan");
                        while ($s = $instansi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['ID_PERBAIKAN']; ?>"><?php echo $s['PERBAIKAN']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
    <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
               Tanggal
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
                <input type="date" name="TGL_INSPEKSI" class="form-control" />
            </div> 
        </div> 
    <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                Pelaksana
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
                <input type="text" name="PELAKSANA" class="form-control" />
            </div> 
        </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=inspeksi"><i class="fa-solid fa-circle-arrow-left"></i>Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>