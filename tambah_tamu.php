<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $alamat = mysqli_real_escape_string($connect, $_POST['alamat']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $organisasi = mysqli_real_escape_string($connect, $_POST['organisasi']);
    $pesan = mysqli_real_escape_string($connect, $_POST['pesan']);
    
    // Insert data baru
    $query = "INSERT INTO tamu (nama, alamat, email, organisasi, pesan) VALUES ('$nama', '$alamat', '$email', '$organisasi', '$pesan')";
    
    if (mysqli_query($connect, $query)) {
        header("Location: index3.php?success=1");
        exit();
    } else {
        header("Location: index3.php?error=1");
        exit();
    }
}
?>