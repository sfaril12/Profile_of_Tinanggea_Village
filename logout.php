<?php
session_start();
session_destroy();
header("Location: utama.php");
exit();
?>