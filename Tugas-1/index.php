<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas 1 - My Web</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    /* 1. Background & Teks Utama */
    body {
      background-color: #121212 !important;
      color: #e2e8f0 !important;
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    }

    /* 2. Navbar & Footer */
    .navbar,
    footer {
      background-color: #1e1e24 !important;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
      border-bottom: 1px solid #2d2d35;
    }

    footer {
      border-top: 1px solid #2d2d35;
      border-bottom: none;
      color: #adb5bd !important;
    }

    /* 3. Modifikasi Sidebar (List Group) */
    .list-group-item {
      background-color: #1e1e24 !important;
      color: #adb5bd !important;
      border: 1px solid #2d2d35 !important;
      transition: all 0.3s ease;
    }

    .list-group-item:hover {
      background-color: #2b3035 !important;
      color: #0dcaf0 !important;
      padding-left: 20px;
    }

    .list-group-item.active {
      background: linear-gradient(135deg, #0d6efd, #0dcaf0) !important;
      border-color: #0d6efd !important;
      color: white !important;
      font-weight: 500;
    }

    /* 4. Modifikasi Accordion (Halaman About) */
    .accordion-item {
      background-color: #1e1e24;
      border: 1px solid #2d2d35;
      border-radius: 10px !important;
      margin-bottom: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    .accordion-button {
      background-color: #1e1e24;
      color: #e2e8f0;
      font-weight: 500;
      box-shadow: none !important;
    }

    .accordion-button:not(.collapsed) {
      background-color: #252b36;
      color: #0dcaf0;
    }

    .accordion-button::after {
      filter: invert(1) grayscale(100%) brightness(200%);
    }

    .accordion-body {
      background-color: #1a1a1f;
      color: #adb5bd;
      border-top: 1px solid #2d2d35;
    }
  </style>
</head>

<body data-bs-theme="dark">
  <?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  // Include file database & model
  include_once 'koneksi.php';
  include_once 'models/Jenis.php';
  include_once 'models/Produk.php';
  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0">
        <?php include_once 'header.php'; ?>
      </div>
    </div>

    <div class="row">
      <div class="col-12 p-0">
        <?php include_once 'menu.php'; ?>
      </div>
    </div>

    <br />

    <div class="row px-3">
      <div class="col-md-3 mb-4">
        <?php include_once 'sidebar.php'; ?>
      </div>

      <div class="col-md-9 mb-4">
        
      <?php
      // Tangkap halaman dari URL, default-nya ke 'home'
      $hal = isset($_GET['hal']) ? $_GET['hal'] : 'main';

      if ($hal == 'main') {
        include_once 'main.php'; // Ini akan memanggil dashboard tombol
      } else if ($hal == 'home') {
        include_once 'home.php';
      } else if ($hal == 'about') {
        include_once 'about.php';
      } else if ($hal == 'contact') {
        include_once 'contact.php';
      }
      // Bagian List (Tabel)
      else if ($hal == 'produk_list') {
        include_once 'produk_list.php';
      } else if ($hal == 'jenis_list') {
        include_once 'jenis_list.php';
      }
      // Bagian Detail
      else if ($hal == 'produk_detail') {
        include_once 'produk_detail.php';
      } else if ($hal == 'jenis_detail') {
        include_once 'jenis_detail.php';
      }
      // Bagian Form (Tambah & Edit)
      else if ($hal == 'produk_form') {
        include_once 'produk_form.php';
      } else if ($hal == 'jenis_form') {
        include_once 'jenis_form.php';
      }
      // Bagian Autentikasi
      else if ($hal == 'login') {
        include_once 'login.php';
      }
      // Jika halaman tidak terdaftar
      else {
        echo "<div class='alert alert-danger shadow-sm'>
            <i class='bi bi-exclamation-triangle-fill me-2'></i> 
            Halaman tidak ditemukan!
          </div>";
      }
      ?>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12 p-0">
        <?php include_once 'footer.php'; ?>
      </div>
    </div>

  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>