<?php
session_start();
include 'koneksi.php'; // sambungkan ke database

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        echo "<script>
            alert('Login berhasil!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Password salah!');
            window.location.href = 'login.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Username tidak ditemukan!');
        window.location.href = 'login.php';
    </script>";
}
?>
