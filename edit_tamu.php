<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$id = $_GET['id'] ?? 0;

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $alamat = mysqli_real_escape_string($connect, $_POST['alamat']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $organisasi = mysqli_real_escape_string($connect, $_POST['organisasi']);
    $pesan = mysqli_real_escape_string($connect, $_POST['pesan']);
    
    // Update data
    $query = "UPDATE tamu SET nama='$nama', alamat='$alamat', email='$email', organisasi='$organisasi', pesan='$pesan' WHERE id_tamu='$id'";
    
    if (mysqli_query($connect, $query)) {
        header("Location: index3.php?updated=1");
        exit();
    } else {
        header("Location: index3.php?error=1");
        exit();
    }
}

// Ambil data tamu yang akan diedit
$query = "SELECT * FROM tamu WHERE id_tamu = '$id'";
$result = mysqli_query($connect, $query);
$tamu = mysqli_fetch_assoc($result);

if (!$tamu) {
    die('Tamu tidak ditemukan');
}
?>