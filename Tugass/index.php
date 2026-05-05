<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas 1 - My Web</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <?php
  // Memastikan session menyala untuk fitur menu Login/Logout yang kita buat sebelumnya
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  // Include file database & model sesuai yang kamu tambahkan
  include_once 'koneksi.php';
  include_once 'models/Jenis.php';
  include_once 'models/Produk.php';
  ?>
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <?php include_once 'header.php'; ?>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <?php include_once 'menu.php'; ?>
      </div>
    </div>

    <br />

    <!-- PERBAIKAN TATA LETAK KOLOM -->
    <div class="row">

      <!-- Sidebar dipindah ke KIRI dengan lebar 3 kolom -->
      <div class="col-md-3">
        <?php include_once 'sidebar.php'; ?>
      </div>

      <!-- Konten Utama dipindah ke KANAN dengan lebar 9 kolom -->
      <div class="col-md-9">
        <?php
        // Memanggil main.php agar struktur file rapi seperti semula
        include_once 'main.php';
        ?>
      </div>

    </div>

    <br />

    <div class="row">
      <div class="col-12">
        <?php include_once 'footer.php'; ?>
      </div>
    </div>

  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>