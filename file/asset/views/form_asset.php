<div class="card">
    <div class="card-header">
        <h4>
            Form Asset
        </h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=asset&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kode Asset
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="no_asset" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Barang
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nm_barang" class="form-control" />
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
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Jumlah
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="jumlah" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Harga
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="harga" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Instansi
                </label>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_instansi" id="id_instansi" class="form-select">
                        <option value="">Pilih Instansi</option>
                        <?php
                        $db = __database();
                        $instansi_data = __ambil($db, "instansi");
                        while ($s = $instansi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['ID_INSTANSI']; ?>"><?php echo $s['NM_INSTANSI']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Jenis Asset
                </label>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_asset" id="id_asset" class="form-select">
                        <option value="">Pilih Jenis Asset</option>
                        <?php
                        $db = __database();
                        $jenis_data = __ambil($db, "jenis_asset");
                        while ($j = $jenis_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $j['ID_ASSET']; ?>"><?php echo $j['JENIS_ASSET']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Pilih Pengadaan
                </label>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_pengadaan" id="id_pengadaan" class="form-select">
                        <option value="">Pilih Pengadaan</option>
                        <?php
                        $db = __database();
                        $pengadaan_data = __ambil($db, "pengadaan");
                        while ($k = $pengadaan_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $k['ID_PENGADAAN']; ?>"><?php echo $k['ID_JENIS']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Terima
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tgl_terima" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a href="admin.php?target=asset" class="btn btn-danger btn-sm">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>