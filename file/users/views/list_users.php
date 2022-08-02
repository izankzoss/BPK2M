<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Users</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=users&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Jabatan</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "users", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['USERNAME'] . "</td>
            <td>" . $r['NM_LENGKAP'] . "</td>
            <td>" . $r['JABATAN'] . "</td>
            <td>" . $r['PASSWORD'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=users&action=edit&id=" . $r['USERNAME'] . "'>
                <i class='fa-solid fa-pen-to-square'>Edit</i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=users&action=delete&id=" . $r['USERNAME'] . "'>
                <i class='fa-solid fa-trash'>Hapus</i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>