<?php
$db = __database();
$where = [
    'username' => $_GET['id']
];
$query     = __ambil($db, "users", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows       = $query->fetch_object();
// print_r($rows);
?> <div class="card">
    <div class="card-header">
        <h4>Edit users</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=users&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->id_user; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Username
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="username" class="form-control" value="<?php echo $rows->username; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Lengkap
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nm_lengkap" class="form-control" value="<?php echo $rows->nm_lengkap; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Jabatan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="jabatan" class="form-control" value="<?php echo $rows->jabatan; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="password" class="form-control" value="<?php echo $rows->password; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solidfa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=users"><i class="fa-solidfa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>