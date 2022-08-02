<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Asset</h4>
    </div>
    <!-- Topbar Navbar -->
    <div class="card-body">
        <?php
        include 'jumlah.php';
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
      <th>Total</th>
      <th>Nama Instansi</th>
      <th>Jenis Asset</th>
      <th>Tanggal Terima</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>";
        // ambil data dari database
        $no = 1;
        $join = [
            "LEFT JOIN INSTANSI as k on k.id_instansi=m.id_instansi",
            "LEFT JOIN JENIS_ASSET as j on j.id_asset=m.id_asset"

        ];
        $q = __ambil($db, "asset as m", "*", $where, $join);
        while ($r = $q->fetch_array()) {
            $jumlah = $r['JUMLAH'];
            $harga = $r['HARGA'];
            $total = jumlah($jumlah, $harga);
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['NO_ASSET'] . "</td>
            <td>" . $r['NM_BARANG'] . "</td>
            <td>" . $r['SPESIFIKASI'] . "</td>
            <td>" . "Rp. " . number_format($total) . " ,-" . "</td>
            <td>" . $r['NM_INSTANSI'] . "</td>
            <td>" . $r['JENIS_ASSET'] . "</td>
            <td>" . $r['TGL_TERIMA'] . "</td>
            
        <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=asset&action=edit&id=" . $r['NO_ASSET'] . "'>
            <i class='fa-solid fa-pen-to-square'></i>
            Edit</a> 
        <a class='btn btn-danger btn-sm' href='admin.php?target=asset&action=delete&id=" . $r['NO_ASSET'] . "'>
        <i class='fa-solid fa-trash'>Hapus</i></a>
            </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>

</div>