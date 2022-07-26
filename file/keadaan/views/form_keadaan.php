<div class="card">
    <div class="card-header">
        <h4>
            Form Keadaan
        </h4>
    </div>
    <div class="card-body">
        <form method="POST" action="admin.php?target=keadaan&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kode
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="id_keadaan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keadaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="keadaan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Keterangan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="ket_keadaan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a href="admin.php?target=keadaan" class="btn btn-danger btn-sm">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>