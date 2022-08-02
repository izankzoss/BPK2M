<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Jenis Asset</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=jenis_asset&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Id Asset</th>
            <th>Jenis Asset</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "jenis_asset");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['ID_ASSET'] . "</td>
            <td>" . $r['JENIS_ASSET'] . "</td>
            <td>" . $r['KETERANGAN'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=jenis_asset&action=edit&id=" . $r['ID_ASSET'] . "'>
                <i class='fa-solid fa-pen-to-square'>Edit</i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=jenis_asset&action=delete&id=" . $r['ID_ASSET'] . "'>
                <i class='fa-solid fa-trash'>Hapus</i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>