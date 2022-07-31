<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Instansi</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=instansi&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Id Intansi</th>
            <th>Nama Instansi</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "instansi", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['id_instansi'] . "</td>
            <td>" . $r['nm_instansi'] . "</td>
            <td>" . $r['ket_instansi'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=instansi&action=edit&id=" . $r['id_instansi'] . "'>
                <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=instansi&action=delete&id=" . $r['id_instansi'] . "'>
                <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
        </div>
    </div>