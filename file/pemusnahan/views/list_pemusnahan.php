<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Pemusnahan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=pemusnahan&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Id Pemusnahan</th>
            <th>Tanggal Pemusnahan</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "pemusnahan", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_PEMUSNAHAN'] . "</td>
            <td>" . $r['TGL_PEMUSNAHAN'] . "</td>
            <td>" . $r['KET_PEMUSNAHAN'] . "</td>
            <td>
<<<<<<< HEAD
                <a class='btn btn-success btn-sm' href='admin.php?target=pemusnahan&action=edit&id=" . $r['ID_PEMUSNAHAN'] . "'>
                <i class='fa-solid fa-pen-to-square'>Edit</i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=pemusnahan&action=delete&id=" . $r['ID_PEMUSNAHAN'] . "'>
=======
                <a class='btn btn-success btn-sm' href='admin.php?target=pemusnahan&action=edit&id=" . $r['id_pemusnahan'] . "'>
                <i class='fa-solid fa-pen-to-square'>Edit</i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=pemusnahan&action=delete&id=" . $r['id_pemusnahan'] . "'>
>>>>>>> e489b9b4eff4f5a18f18390171bd5171b961970d
                <i class='fa-solid fa-trash'>Hapus</i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
        </div>
    </div>