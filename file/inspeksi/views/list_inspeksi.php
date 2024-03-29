<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Inspeksi</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=inspeksi&action=form'><i class='fa-solid fa-plus'></i>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Id Inspeksi</th>
            <th>Keadaan</th>
            <th>Perbaikan</th>
            <th>Tanggal</th>
            <th>Pelaksana</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $join = [
            "LEFT JOIN KEADAAN as k on k.id_keadaan=m.id_keadaan",
            "LEFT JOIN PERBAIKAN as j on j.id_perbaikan=m.id_perbaikan",
        ];
        $q = __ambil($db, "inspeksi as m", "*", $where, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_INSPEKSI'] . "</td>
            <td>" . $r['KEADAAN'] . "</td>
            <td>" . $r['PERBAIKAN'] . "</td>
            <td>" . $r['TGL_INSPEKSI'] . "</td>
            <td>" . $r['PELAKSANA'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=inspeksi&action=edit&id=" . $r['ID_INSPEKSI'] . "'><i class='fa-solid fa-pen-to-square'></i>Edit</a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=inspeksi&action=delete&id=" . $r['ID_INSPEKSI'] . "'><i class='fa-solid fa-trash'></i>Hapus</a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>