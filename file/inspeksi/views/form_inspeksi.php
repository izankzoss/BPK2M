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
               Tanggal
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
                <input type="text" name="tanggal" class="form-control" />
            </div> 
        </div> 
    <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                Pengadaan
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
                <input type="text" name="pengadaan" class="form-control" />
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