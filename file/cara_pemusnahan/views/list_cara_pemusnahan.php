<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Cara Pemusnahan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?
target=cara_pemusnahan&action=form'><i class='fa-solid fa-plus'></i>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
      <thead>
      <tr>
      <th>No</th>
      <th>Id</th>
      <th>cara</th>
      <th>keterangan</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>";
        // ambil data dari database
        $q = __ambil($db, "cara_pemusnahan");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_CARA'] . "</td>
            <td>" . $r['CARA'] . "</td>
            <td>" . $r['KET_CARA'] . "</td>
        <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=cara_pemusnahan&action=edit&id=" . $r['ID_CARA'] . "'>
            <i class='fa-solid fa-pen-to-square'>Edit</i>
            </a> 
        <a class='btn btn-danger btn-sm' href='admin.php?target=cara_pemusnahan&action=delete&id=" . $r['ID_CARA'] . "'>
        <i class='fa-solid fa-trash'>Hapus</i>
        </a>
            </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>