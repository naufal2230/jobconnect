<?php
include 'koneksi.php'; // file koneksi ke database

$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // enkripsi password

// Simpan ke database
$query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
        alert('Registrasi berhasil, silakan login!');
        window.location.href = 'login.php';
    </script>";
} else {
    echo "<script>
        alert('Registrasi gagal!');
        window.location.href = 'register.php';
    </script>";
}
?>
