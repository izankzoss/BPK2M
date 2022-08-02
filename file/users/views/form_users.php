<?php
$db = __database();
?>
<div class="card">
    <div class="card-header">
        <h4>Form Users</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=users&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Username
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="username" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
<<<<<<< HEAD
                    Nama Lengkap
=======
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" name="password" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Lengkap 
>>>>>>> 13f2acd19f842b02ded623b493ce3d485522d6bf
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="integer" name="nm_lengkap" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Jabatan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="jabatan" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="password" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=users"> <i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>