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
                    harga
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="harga" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Total
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="total" class="form-control" />
                </div>
            </div>
            <?php
            $jumlah = $_GET['jumlah'];
            $harga = $_GET['harga'];
            $total = $jumlah * $harga;
            $total = $_POST['total'];
            ?>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal Terima
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="tgl_terima" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-succes btn-sm" value="simpan">
                    <a href="admin.php?target=asset" class="btn btn-danger btn-sm">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>