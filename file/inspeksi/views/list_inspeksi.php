<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i>Data Inspeksi</h4>
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
            <th>tanggal</th>
            <th>pelaksana</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db,"inspeksi");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['tgl_inspeksi'] . "</td>
            <td>" . $r['pengadaan'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=inspeksi&action=edit&id=" . $r['tgl_inspeksi'] . "'><i class='fa-solid fa-pen-to-square'></i>Edit</a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=inspeksi&action=delete&id=" . $r['tgl_inspeksi'] . "'><i class='fa-solid fa-trash'></i>Hapus</a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>