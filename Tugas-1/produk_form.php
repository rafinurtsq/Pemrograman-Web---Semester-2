<?php
$obj_level = new Jenis();
$rs_level = $obj_level->index();
$id = $_GET['id'] ?? null;
$obj_produk = new Produk();
$row = !empty($id) ? $obj_produk->getProduk($id) : [];

function val($row, $key)
{
  return $row[$key] ?? '';
}
if (!isset($_SESSION['user'])) {
  echo "<script>
            alert('Akses Ditolak! Anda harus login untuk mengubah data.');
            window.location.href = 'index.php?hal=login';
          </script>";
  exit;
}
?>

<style>
  .form-wrapper {
    max-width: 700px;
    margin: 0 auto;
  }

  .custom-card {
    background: #212529;
    /* Dark Bootstrap */
    border: 1px solid #373b3e;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
  }

  .custom-card-header {
    background: linear-gradient(135deg, #0d6efd, #0dcaf0);
    color: white;
    border-radius: 12px 12px 0 0;
    padding: 20px;
    text-align: center;
    border-bottom: none;
  }

  .form-control,
  .form-select {
    background-color: #2b3035;
    border: 1px solid #495057;
    color: #f8f9fa;
  }

  .form-control:focus,
  .form-select:focus {
    background-color: #2b3035;
    color: #f8f9fa;
    border-color: #0dcaf0;
    box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.25);
  }

  .form-floating>label {
    color: #adb5bd;
  }
</style>

<div class="container mt-5 mb-5 form-wrapper">
  <div class="card custom-card">
    <div class="card-header custom-card-header">
      <h3 class="mb-0"><i class="bi bi-mortarboard-fill me-2"></i>Form Riwayat Studi</h3>
    </div>

    <div class="card-body p-4">
      <form method="POST" action="controller/produkController.php">

        <div class="row g-3 mb-3">
          <div class="col-md-8">
            <div class="form-floating">
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Sekolah"
                value="<?= val($row, 'nama') ?>" required>
              <label for="nama"><i class="bi bi-building me-1"></i> Nama Sekolah/Kampus</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-floating">
              <select name="idlevel" class="form-select" id="idlevel" required>
                <option value="">-- Pilih --</option>
                <?php foreach ($rs_level as $lvl): ?>
                  <option value="<?= $lvl['id'] ?>" <?= (val($row, 'idlevel') == $lvl['id']) ? 'selected' : '' ?>>
                    <?= $lvl['nama'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <label for="idlevel"><i class="bi bi-layers-fill me-1"></i> Jenjang</label>
            </div>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <div class="form-floating">
              <input type="number" name="tahun_lulus" class="form-control" id="tahun" placeholder="Tahun Lulus"
                value="<?= val($row, 'tahun_lulus') ?>" required>
              <label for="tahun"><i class="bi bi-calendar-check me-1"></i> Tahun Lulus</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="text" name="foto_sekolah" class="form-control" id="foto" placeholder="Foto Sekolah"
                value="<?= val($row, 'foto_sekolah') ?>">
              <label for="foto"><i class="bi bi-image me-1"></i> Nama File Foto (Contoh: sma.jpg)</label>
            </div>
          </div>
        </div>

        <div class="form-floating mb-4">
          <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan"
            style="height: 120px"><?= val($row, 'keterangan') ?></textarea>
          <label for="keterangan"><i class="bi bi-card-text me-1"></i> Keterangan / Prestasi</label>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
          <a href="index.php?hal=produk_list" class="btn btn-outline-secondary px-4">
            <i class="bi bi-arrow-left"></i> Batal
          </a>
          <div>
            <button type="submit" name="proses" value="<?= empty($id) ? 'simpan' : 'ubah' ?>"
              class="btn btn-primary px-4">
              <i class="bi bi-save me-1"></i> <?= empty($id) ? 'Simpan Data' : 'Update Data' ?>
            </button>
            <?php if ($id): ?><input type="hidden" name="idx" value="<?= $id ?>"><?php endif; ?>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>