<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    
    // Ambil data admin berdasarkan ID
    $query = "SELECT * FROM admin WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    $admin = mysqli_fetch_assoc($result);
    
    if (!$admin) {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    
    // Jika password diisi, update password juga
    if (!empty($_POST['password'])) {
        $password = md5($_POST['password']);
        $query = "UPDATE admin SET username='$username', password='$password', email='$email' WHERE id='$id'";
    } else {
        $query = "UPDATE admin SET username='$username', email='$email' WHERE id='$id'";
    }
    
    if (mysqli_query($connect, $query)) {
        header("Location: index.php?updated=1");
        exit();
    } else {
        header("Location: index.php?error=1");
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Admin</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($admin['username']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($admin['email']); ?>" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="index.php" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>