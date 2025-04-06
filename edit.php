<?php include 'db.php';

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM mahasiswa WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id";
    if ($koneksi->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal update data: " . $koneksi->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Data</title></head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <h2>Edit Mahasiswa</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
        NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
    <br><a href="index.php">← Kembali</a>
</body>
</html>
❌ 5. hapus.php – Menghapus Data
php
Salin
Edit
<?php
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id=$id";
if ($koneksi->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data: " . $koneksi->error;
}
?>