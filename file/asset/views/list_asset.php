<div class="card">
    <div class="card-header">
        <h4>List Asset</h4>
    </div>
    <div class="card-body">
        <?php
        $jumlah = $_GET['JUMLAH'];
        $harga = $_GET['HARGA'];
        $total = $jumlah * $harga;
        $total = $_POST['TOTAL'];
        $db = __database();
        //buat table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?target=asset&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordere'>
        <thead>
        <tr>
        <th>No</th>
        <th>No Asset</th>
        <th>Nama Barang</th>
        <th>Spesifikasi</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Tanggal Terima</th>
        </tr>
        </thead>
        <tbody>";
        //ambil data dari database
        $q = __ambil($db, "asset");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['NO_ASSET'] . "</td>
            <td>" . $r['NM_BARANG'] . "</td>
            <td>" . $r['SPESIFIKASI'] . "</td>
            <td>" . $r['JUMLAH'] . "</td>
            <td>" . $r['HARGA'] . "</td>
            <td>" . $r['TOTAL'] . "</td>
            <td>" . $r['TGL_TERIMA'] . "</td>
            <td><a class='btn btn-success btn-sm' href='admin.php?target=asset&action=edit&id=" . $r['NO_ASSET'] . "' >Edit</a></td>
            <td><a class='btn btn-danger btn-sm' href='admin.php?target=asset&action=delete&id=" . $r['NO_ASSET'] . "'>Hapus</a></td>
            </tr>";
            $no++;
        }
        echo "</tbody></table><div>"; ?>
    </div>
</div>