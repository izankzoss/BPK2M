<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Pengadaan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=pengadaan&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <a class='btn btn-warning btn-sm text-dark' href='#'><i class='fa-solid fa-print'></i> PrintOut Data</a>
        <a class='btn btn-primary btn-sm text-light' href='#'><i class='fa-solid fa-cloud-arrow-down'></i> Export Data</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th><th>Id Pengadaan</th><th>No Barang</th><th>Tanggal Pengadaan</th><th>Jumlah Pengadaan</th><th>Sumber Pengadaan</th><th>#</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $join =[
            "LEFT JOIN jml pengadaan as p on p.jml_pengadaan=m.jml_pengadaan",
            "LEFT JOIN tgl pengadaan as s on s.tgl_pengadaan=m.tgl_pengadaan"
        ];
        $where = [
            'm.jml_pengadaan' => $_SESSION['id']
        ];
        $q = __ambil($db, "pengadaan as m", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['id_pengadaan'] . "</td>
            <td>" . $r['nmr_barang'] . "</td>
            <td>" . $r['tgl_pengadaan'] . "</td>
            <td>" . $r['jml_pengadaan'] . "</td>
            <td>" . $r['sumber_pengadaan'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=pengadaan&action=edit&id=" . $r['id_pengadaan'] . "'>
                <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=pengadaan&action=delete&id=" . $r['id_pengadaan'] . "'>
                <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
        </div>
    </div>