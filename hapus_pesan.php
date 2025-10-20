<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $subjek = mysqli_real_escape_string($connect, $_POST['subjek']);
    $pesan_baru = mysqli_real_escape_string($connect, $_POST['pesan_baru']);
    
    // Hapus data berdasarkan semua kolom
    $query = "DELETE FROM pesan WHERE nama = '$nama' AND email = '$email' AND subjek = '$subjek' AND pesan_baru = '$pesan_baru'";
    
    if (mysqli_query($connect, $query)) {
        header("Location: index2.php?deleted=1");
    } else {
        header("Location: index2.php?error=Data+tidak+ditemukan");
    }
    exit();
} else {
    header("Location: index2.php?error=Metode+request+tidak+valid");
    exit();
}
?>