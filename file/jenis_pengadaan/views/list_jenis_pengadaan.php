<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Jenis Pengadaan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=jenis_pengadaan&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Id Jenis</th>
            <th>Jenis Pengadaan</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "jenis_pengadaan", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_JENIS'] . "</td>
            <td>" . $r['JENIS_PENGADAAN'] . "</td>
            <td>" . $r['KET_JENIS'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=jenis_pengadaan&action=edit&id=" . $r['id_jenis'] . "'>
                <i class='fa-solid fa-pen-to-square'>Edit</i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=jenis_pengadaan&action=delete&id=" . $r['id_jenis'] . "'>
                <i class='fa-solid fa-trash'>Hapus</i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
        </div>
    </div>