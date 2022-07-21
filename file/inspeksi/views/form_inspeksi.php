<div class="card">
  <div class="card-header">
    <h4>Form Inspeksi</h4>
    </div>
    <div class="card-body">
      <form method="post" action="admin.php?target=prodi&action=input" data-parsley-validate
       class="form-horizontal form-label-left">
       <div class="mb-3">
        <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
 No Asset
 </label>
 <div class="col-md-6 col-sm-6 col-lg-12">
  <input type="text" name="no_asset" class="form-control" />
       </div>
       </div>
       <div class="mb-3">
        <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
          Id Inspeksi
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12 ">
          <input type="text" name="id_inspeksi" class="form-control">
        </div>
       </div>
       <div class="mb-3">
        <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
          Id Keadaan
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12">
          <input type="text" name="id_keadaan" class="form-comtrol">
        </div>
       </div>
        <div class="mb-3">
        <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
          Pelaksana
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12 ">
          <input type="text" name="Pelaksana" class="form-control">
        </div>
       </div>
       <div class="mb-3">
       <div class="col-md-6 col-sm-6 col-lg-12">
          <button type="submit" class="btn btn-success btn-sm" id="simpan" name="Simpan"> <i class="fa-solid fa-floppy-disk"></i> 
        </button>
          <a class="btn btn-danger btn-sm" href="admin.php?target=prodi"><i class="fa-solid fa-circle-arrow-left"></i>
         Kembali</a>
            </div>
           </div>
           </form>
          </div>
        </div>


