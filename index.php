<?php
session_start();
if (!isset($_SESSION['admin']) || !isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AAENOS | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="./css/adminlte.css" as="style" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media='all'"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/adminlte.css" />
  </head>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <span class="nav-link">
                <i class="bi bi-person-fill"></i>
                Selamat datang, <?php echo htmlspecialchars($_SESSION['admin']); ?>
              </span>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="logout.php" class="nav-link text-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>
      
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="./index.php" class="brand-link">
            <img
              src="./assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light">AAENOS</span>
          </a>
        </div>
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.php" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Admin</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index2.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Pesan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Tamu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index4.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Uraian</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link text-danger">
                  <i class="nav-icon bi bi-box-arrow-right"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      
      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Data Admin</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Admin</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
        <div class="app-content">
          <div class="container-fluid">
            <?php
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Admin berhasil ditambahkan!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }
            if (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Admin berhasil dihapus!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }
            if (isset($_GET['updated']) && $_GET['updated'] == 1) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Admin berhasil diupdate!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Error: ' . htmlspecialchars($_GET['error']) . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }
            ?>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Daftar Admin</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahAdminModal">
                        <i class="bi bi-plus-circle"></i> Tambah Admin
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $query = "SELECT * FROM admin";
                          $result = mysqli_query($connect, $query);
                          if ($result && mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                  echo "<td>
                                          <button class='btn btn-sm btn-warning' onclick='editAdmin(" . $row['id'] . ")'>
                                            <i class='bi bi-pencil'></i> Edit
                                          </button>
                                          <button class='btn btn-sm btn-danger' onclick='hapusAdmin(" . $row['id'] . ")'>
                                            <i class='bi bi-trash'></i> Hapus
                                          </button>
                                        </td>";
                                  echo "</tr>";
                              }
                          } else {
                              echo "<tr><td colspan='4' class='text-center'>Tidak ada data admin</td></tr>";
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      
      <div class="modal fade" id="tambahAdminModal" tabindex="-1" aria-labelledby="tambahAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahAdminModalLabel">Tambah Admin Baru</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="tambah_admin.php" method="POST">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <strong>
          Copyright &copy; 2014-2025&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
      </footer>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./js/adminlte.js"></script>
    
    <script>
    function hapusAdmin(id) {
        if (confirm('Apakah Anda yakin ingin menghapus admin ini?')) {
            window.location.href = 'hapus_admin.php?id=' + id;
        }
    }
    
    function editAdmin(id) {
        window.location.href = 'edit_admin.php?id=' + id;
    }
    </script>
  </body>
</html>