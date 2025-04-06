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