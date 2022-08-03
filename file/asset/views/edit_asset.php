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
            <input type="text" name="id" value="<?php echo $rows->NO_ASSET; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Barang
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="nm_barang" type="text" name="nm_barang" class="form-control" value="<?php echo $rows->nm_barang; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Spesifikasi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="spesifikasi" id="spesifikasi_baru" value="baru" <?php echo $rows->SPESIFIKASI == "Baru" ? "checked" : ""; ?>>
                        <label for="spesifikasi_baru" class="form-check-label">
                            Baru
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="spesifikasi" id="spesifikasi_bekas" value="bekas" <?php echo $rows->SPESIFIKASI == "Bekas" ? "checked" : ""; ?>>
                        <label for="spesifikasi_bekas" class="form-check-label">
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
                            <option value="<?php echo $r['ID_INSTANSI']; ?>" <?php echo $rows->ID_INSTANSI == $r['ID_INSTANSI'] ? "selected" : ""; ?>> <?php echo $r['NM_INSTANSI']; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first_name">
                    Jenis Asset
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="id_asset" id="id_asset" class="form-select">
                        <option value="">Pilih Jenis Asset</option>
                        <?php
                        $jenis_data = __ambil($db, "jenis_asset", "*");
                        while ($r = $jenis_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['ID_ASSET']; ?>" <?php echo $rows->id_asset == $r['id_asset'] ? "selected" : ""; ?>> <?php echo $r['JENIS_ASSET']; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Terima
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input id="TGL_TERIMA" type="date" name="TGL_TERIMA" class="form-control" value="<?php echo $rows->TGL_TERIMA; ?>" class="form-control col-md-7 col-xs-12">
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