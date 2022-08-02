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
                    Id Pengadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="id_pengadaan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Pilih Jenis Pengadaan
                </label>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_jenis" id="id_jenis" class="form-select">
                        <option value="">Pilih Jenis Pengadaan</option>
                        <?php
                        $db = __database();
                        $jenis_data = __ambil($db, "jenis_pengadaan");
                        while ($j = $jenis_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $j['ID_JENIS']; ?>"><?php echo $j['JENIS_PENGADAAN']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Pilih Instansi
                </label>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_instansi" id="id_instansi" class="form-select">
                        <option value="">Pilih Instansi</option>
                        <?php
                        $db = __database();
                        $instansi_data = __ambil($db, "instansi");
                        while ($i = $instansi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $i['ID_INSTANSI']; ?>"><?php echo $i['NM_INSTANSI']; ?></option>
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
                    <input type="date" name="tgl_pengadaan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i>Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=pengadaan"> <i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>