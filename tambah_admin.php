
<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = md5($_POST['password']); // Hash password dengan MD5
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    
    $query = "INSERT INTO admin (username, password, email) VALUES ('$username', '$password', '$email')";
    
    if (mysqli_query($connect, $query)) {
        header("Location: index.php?success=1");
        exit();
    } else {
        header("Location: index.php?error=1");
        exit();
    }
}
?>