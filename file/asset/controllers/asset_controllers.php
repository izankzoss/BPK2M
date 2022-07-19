<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Assets</h1>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <button type="button" class="btn btn-primary">Tambah Asset</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Asset</th>
                        <th>Nama</th>
                        <th>Barang</th>
                        <th>Spesifikasi</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Tanggal Terima</th>
                        <th>Opsi</th>
                      
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $i = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM asset");
                while($d = mysqli_fetch_array($data)){
                ?>
                    <tr>
                        <th><?php echo $i++;?></th>
                        <th><?php echo $d['id_asset']; ?></th>
                        <th><?php echo $d['username']; ?></th>
                        <th><?php echo $d['nm_barang']; ?></th>
                        <th><?php echo $d['spesifikasi']; ?></th>
                        <th><?php echo $d['jumlah']; ?></th>
                        <th><?php echo $d['harga']; ?></th>
                        <th><?php echo $d['total']; ?></th>
                        <th><?php echo $d['tgl_terima']; ?></th>
                        <th>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </th>
                        </th>
                        <?php
                        }
                        ?>
                    </tr>
            </table>
        </div>
    </div>
</div>
