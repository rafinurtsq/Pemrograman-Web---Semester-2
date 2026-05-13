<?php
$id = $_REQUEST['id'];
$model = new Produk();
$rs = $model->getProduk($id);

if (!$rs) {
    echo "<div class='container mt-5'>
            <div class='alert alert-danger text-center'>
                <h4>⚠️ Oops! Data tidak ditemukan.</h4>
                <p>Riwayat studi ini mungkin sudah dihapus atau relasi datanya terputus.</p>
                <a href='index.php?hal=produk_list' class='btn btn-primary'>Kembali ke Daftar</a>
            </div>
          </div>";
    exit; // Stop eksekusi kode di bawahnya
}
?>

<style>
    .card-detail {
        background: #2a2a2f;
        border: 1px solid #3a3a3f;
        border-radius: 12px;
        color: #e5e7eb;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .card-detail img {
        border-radius: 12px 0 0 12px;
        height: 100%;
        object-fit: cover;
    }

    .badge-level {
        background-color: #0d6efd;
        font-size: 0.9rem;
    }
</style>

<div class="container mt-4">
    <div class="card card-detail mb-3">
        <div class="row g-0">
            <div class="col-md-5">
                <?php if (!empty($rs['foto_sekolah'])): ?>
                    <img src="img/<?= $rs['foto_sekolah'] ?>" class="img-fluid" alt="foto sekolah">
                <?php else: ?>
                    <img src="img/nophoto.jpg" class="img-fluid" alt="nophoto">
                <?php endif; ?>
            </div>

            <div class="col-md-7">
                <div class="card-body p-4">
                    <h2 class="card-title text-white mb-3">
                        🏫 <?= $rs['nama'] ?>
                    </h2>

                    <span class="badge badge-level mb-4"><?= $rs['jenjang'] ?></span>

                    <div class="card-text">
                        <p><strong>Tahun Lulus:</strong> <?= $rs['tahun_lulus'] ?></p>
                        <p><strong>Keterangan:</strong></p>
                        <p class="text-secondary"><?= nl2br($rs['keterangan']) ?></p>
                    </div>

                    <div class="mt-5">
                        <a href="index.php?hal=produk_list" class="btn btn-outline-light">
                            <i class="bi bi-arrow-left"></i> Kembali ke Studies
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>