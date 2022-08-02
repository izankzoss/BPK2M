<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Sebab Pemusnahan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=sebab_pemusnahan&action=form'><i class='fasolid fa-plus'></i> Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Id Sebab</th>
            <th>Sebab</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "sebab_pemusnahan");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_SEBAB'] . "</td>
            <td>" . $r['SEBAB'] . "</td>
            <td>" . $r['KET_SEBAB'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=sebab_pemusnahan&action=edit&id=" . $r['ID_SEBAB'] . "'>
                <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=sebab_pemusnahan&action=delete&id=" . $r['ID_SEBAB'] . "'>
                <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>