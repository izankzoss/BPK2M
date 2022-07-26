<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Keadaan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?
target=keadaan&action=form'><i class='fa-solid fa-plus'></i>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
      <thead>
      <tr>
      <th>No</th>
      <th>Kode</th>
      <th>Keadaan</th>
      <th>Keterangan</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>";
        // ambil data dari database
        $q = __ambil($db, "keadaan");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_KEADAAN'] . "</td>
            <td>" . $r['KEADAAN'] . "</td>
            <td>" . $r['KET_KEADAAN'] . "</td>
        <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=keadaan&action=edit&id=" . $r['ID_KEADAAN'] . "'>
            <i class='fa-solid fa-pen-to-square'></i>
            Edit</a> 
        <a class='btn btn-danger btn-sm' href='admin.php?target=keadaan&action=delete&id=" . $r['ID_KEADAAN'] . "'>
        <i class='fa-solid fa-trash'></i>
        Hapus</a>
            </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>