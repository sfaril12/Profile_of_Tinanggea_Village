<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    
    $query = "DELETE FROM tamu WHERE id_tamu = '$id'";
    
    if (mysqli_query($connect, $query)) {
        header("Location: index3.php?deleted=1");
        exit();
    } else {
        header("Location: index3.php?error=1");
        exit();
    }
} else {
    header("Location: index3.php?error=no_id");
    exit();
}
?>