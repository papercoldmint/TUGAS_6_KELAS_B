<?php
$koneksi = new mysqli("localhost", "userweb", "123456", "db_mahasiswa");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>