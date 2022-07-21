  <div class="card">
  <div class="card-header">
    <h4><i class="fa-solid fa-database"></i> Data Inspeksi</h4>
  </div>
  <div class="card-body">
  <?php 
    $db = __database();
    // buat header table
    echo "<a class='btn btn-primary btn-sm' href='admin.php?
target=inspeksi&action=form'><i class='fa-solid fa-plus'></i>Tambah</a><br><br>";
      echo "<div class='table-responsive'>";
      echo "<table class='table table-striped table-bordered'>
      <thead>
      <tr>
      <th>No Asset</th><th>Id Inspeksi</th><th>Id Keadaan</th><th>Tanggal Inpeksi</th><th>Pelaksana</th>
      </tr>
      </thead>
      <tbody>";
      // ambil data dari database
      $q = __ambil($db, "inspeksi");
      $no = 1;
      while ($r = $q->fetch_array()) {
        echo "<tr>
       <td>" . $r['no_asset'] . "</td>
        <td>" . $r['id_inspeksi'] . "</td>
        <td>" . $r['id_keadaan'] . "</td>
        <td>" . $r['tgl_inspeksi'] . "</td>
        <td>" . $r['pelaksana'] . "</td>
        <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=inspeksi&action=edit&id=" . $r['id_inspeksi'] . "'>
            <i class='fa-solid fa-pen-to-square'></i>
            Edit</a> 
        <a class='btn btn-danger btn-sm' href='admin.php?target=inspeksi&action=delete&id=" . $r['id_inspeksi'] . "'>
        <i class='fa-solid fa-trash'></i>
        Hapus</a>
            </td>
            </tr>";
            $no++;
      }
      echo "</tbody></table></div>"; ?>
  </div>
</div>

       
