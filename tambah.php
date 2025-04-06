<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Data</title></head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="POST">
        Nama: <input type="text" name="nama"><br>
        NIM: <input type="text" name="nim"><br>
        Jurusan: <input type="text" name="jurusan"><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>
    <br><a href="index.php">← Kembali</a>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        $sql = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
        if ($koneksi->query($sql)) {
            echo "Data berhasil ditambahkan!";
        } else {
            echo "Gagal menambahkan data: " . $koneksi->error;
        }
    }
    ?>
</body>
</html>