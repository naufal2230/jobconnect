<?php
$koneksi = mysqli_connect("localhost", "root", "", "jobconnectt"); // sesuaikan
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
