<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Perbaikan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?
target=perbaikan&action=form'><i class='fa-solid fa-plus'></i>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
      <thead>
      <tr>
      <th>No</th>
      <th>Kode</th>
      <th>Perbaikan</th>
      <th>Keterangan</th>
      <th>Tanggal</th>
      <th>Biaya</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>";
        // ambil data dari database
        $q = __ambil($db, "perbaikan");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_PERBAIKAN'] . "</td>
            <td>" . $r['PERBAIKAN'] . "</td>
            <td>" . $r['KET_PERBAIKAN'] . "</td>
            <td>" . $r['TGL_PERBAIKAN'] . "</td>
            <td>" . $r['BIAYA'] . "</td>
        <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=perbaikan&action=edit&id=" . $r['ID_PERBAIKAN'] . "'>
            <i class='fa-solid fa-pen-to-square'>Edit</i>
            </a> 
        <a class='btn btn-danger btn-sm' href='admin.php?target=perbaikan&action=delete&id=" . $r['ID_PERBAIKAN'] . "'>
        <i class='fa-solid fa-trash'>Hapus</i>
        </a>
            </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>