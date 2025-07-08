<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jobconnectt";

// Koneksi
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$portfolio = $_POST['portfolio'];
$cover_letter = $_POST['cover_letter'];

// Upload file
$upload_dir = "uploads/";
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

if ($file_ext !== 'pdf') {
    echo '
    <html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
        Swal.fire({
            icon: "error",
            title: "File must be PDF!",
            confirmButtonText: "OK"
        }).then(() => {
            window.history.back();
        });
        </script>
    </body>
    </html>';
    exit;
}


$new_file_name = uniqid() . ".pdf";
$target_path = $upload_dir . $new_file_name;

if (move_uploaded_file($file_tmp, $target_path)) {
    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO applications (name, email, portfolio, file_path, cover_letter) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $portfolio, $target_path, $cover_letter);
    $stmt->execute();

//     echo '<div class="alert alert-success text-center mt-4">Lamaran berhasil dikirim!</div>';
// } else {
//     echo '<div class="alert alert-danger text-center mt-4">Gagal mengunggah file.</div>';
// }

// Tampilkan popup & redirect pakai JavaScript
    echo '
    <html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
        Swal.fire({
            icon: "success",
            title: "Application Successfully Submitted!",
            confirmButtonText: "OK"
        }).then(() => {
            window.history.back();
        });
        </script>
    </body>
    </html>';
    exit;
} else {
    echo '
    <html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
        Swal.fire({
            icon: "error",
            title: "Failed to Upload Application!",
            confirmButtonText: "OK"
        }).then(() => {
            window.history.back();
        });
        </script>
    </body>
    </html>';
}

$conn->close();
?>
