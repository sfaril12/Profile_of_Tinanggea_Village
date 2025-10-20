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
    <title>AAENOS | Uraian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <meta name="title" content="AdminLTE | Uraian" />
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
                    <a href="./index.php" class="nav-link">
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
                    <a href="./index4.php" class="nav-link active">
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
                <h3 class="mb-0">Data Uraian</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Uraian</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
        <div class="app-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Daftar Uraian</h3>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Uraian Singkat</th>
                            <th>Uraian Lengkap</th>
                            <th>Photo</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $query = "SELECT * FROM uraian ORDER BY id_uraian ASC";
                          $result = mysqli_query($connect, $query);
                          if ($result && mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                  echo "<tr>";
                                  echo "<td>" . htmlspecialchars($row['id_uraian']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['judul']) . "</td>";
                                  echo "<td>" . htmlspecialchars($row['uraian_singkat']) . "</td>";
                                  echo "<td>" . htmlspecialchars(substr(strip_tags($row['uraian_lengkap']), 0, 100)) . "...</td>";
                                  echo "<td>" . htmlspecialchars($row['photo']) . "</td>";
                                  echo "</tr>";
                              }
                          } else {
                              echo "<tr><td colspan='5' class='text-center'>Tidak ada data uraian</td></tr>";
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
  </body>
</html>