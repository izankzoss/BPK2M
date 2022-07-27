<div class="card">
    <div class="card-header">
        <h4>
            Form Perbaikan
        </h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=perbaikan&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kode
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="id_perbaikan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Perbaikan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="perbaikan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="ket_perbaikan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Tanggal
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tgl_perbaikan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Biaya
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="biaya" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a href="admin.php?target=perbaikan" class="btn btn-danger btn-sm">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>