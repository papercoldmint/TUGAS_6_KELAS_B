<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Data Mahasiswa</h2>
    <a href="tambah.php">+ Tambah Data</a><br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM mahasiswa";
        $result = $koneksi->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['nim']."</td>
                <td>".$row['jurusan']."</td>
                <td>
                    <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                    <a href='hapus.php?id=".$row['id']."' onclick='return confirm(\"Yakin?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>