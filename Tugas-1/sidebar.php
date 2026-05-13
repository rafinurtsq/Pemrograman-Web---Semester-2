<div class="list-group">
  <a href="index.php?hal=main" class="list-group-item list-group-item-action">
    <i class="bi bi-grid-1x2-fill me-2"></i> Menu Utama
  </a>
  <a href="index.php?hal=home" class="list-group-item list-group-item-action">Halaman Home</a>
  <a href="index.php?hal=about" class="list-group-item list-group-item-action">About Me</a>
  <a href="index.php?hal=contact" class="list-group-item list-group-item-action">Contact Me</a>

  <!-- PERUBAHAN DIMULAI DI SINI -->
  <!-- 1. href diubah mengarah ke ID sub-menu (#collapseStudies) dan ditambahkan data-bs-toggle -->
  <a href="#collapseStudies" data-bs-toggle="collapse"
    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" role="button"
    aria-expanded="false" aria-controls="collapseStudies">
    My Studies
    <i class="bi bi-caret-down-fill"></i> <!-- Icon panah ke bawah (opsional, pastikan icon bootstrap sudah di-load) -->
  </a>

  <!-- 2. Ini adalah sub-menu yang akan muncul saat diklik -->
  <div class="collapse" id="collapseStudies">
    <!-- ps-4 digunakan untuk memberi padding (jarak) di sebelah kiri agar terlihat seperti sub-menu -->
    <a href="index.php?hal=jenis_list" class="list-group-item list-group-item-action ps-4 border-0">
      🏷️ Level
    </a>
    <a href="index.php?hal=produk_list" class="list-group-item list-group-item-action ps-4 border-0">
      📦 Studies
    </a>
  </div>
  <!-- PERUBAHAN SELESAI -->
</div>