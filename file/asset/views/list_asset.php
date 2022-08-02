<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Asset</h4>
    </div>
    <!-- Topbar Navbar -->
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?
target=asset&action=form'><i class='fa-solid fa-plus'></i>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
      <thead>
      <tr>
      <th>No</th>
      <th>No Asset</th>
      <th>Nama Barang</th>
      <th>Spesifikasi</th>
      <th>jumlah</th>
      <th>Harga</th>
      <th>Total</th>
      <th>Tanggal Terima</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>";
        // ambil data dari database
        $q = __ambil($db, "asset");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['NO_ASSET'] . "</td>
            <td>" . $r['NM_BARANG'] . "</td>
            <td>" . $r['SPESIFIKASI'] . "</td>
            <td>" . $r['JUMLAH'] . "</td>
            <td>" . "Rp. " . number_format($r['HARGA']) . " ,-" . "</td>
            <td>" . $r['TOTAL'] . "</td>
            <td>" . $r['TGL_TERIMA'] . "</td>
            
        <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=asset&action=edit&id=" . $r['NO_ASSET'] . "'>
            <i class='fa-solid fa-pen-to-square'></i>
            Edit</a> 
        <a class='btn btn-danger btn-sm' href='admin.php?target=asset&action=delete&id=" . $r['NO_ASSET'] . "'>
        <i class='fa-solid fa-trash'></i>
        Hapus</a>
            </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>

</div>