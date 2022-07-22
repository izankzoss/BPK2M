<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Sebab</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=sebab&action=form'><i class='fasolid fa-plus'></i> Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th><th>Id Sebab</th><th>Id Pemusnahan</th><th>Sebab</th><th>Keterangan Sebab</th><th>#</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "sebab");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['id_sebab'] . "</td>
            <td>" . $r['id_pemusnahan'] . "</td>
            <td>" . $r['sebab'] . "</td>
            <td>" . $r['ket_sebab'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=sebab&action=edit&id=" . $r['id_sebab'] . "'>
                <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=sebab&action=delete&id=" . $r['id_sebab'] . "'>
                <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
        </div>
    </div>