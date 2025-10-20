<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    
    $query = "DELETE FROM admin WHERE id = '$id'";
    
    if (mysqli_query($connect, $query)) {
        header("Location: index.php?deleted=1");
        exit();
    } else {
        header("Location: index.php?error=1");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>