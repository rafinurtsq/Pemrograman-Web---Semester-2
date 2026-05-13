<?php
$id = $_GET['id'] ?? null;
$obj_jenis = new Jenis();
$row = !empty($id) ? $obj_jenis->getJenis($id) : [];

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
    .form-wrapper-mini {
        max-width: 500px;
        margin: 0 auto;
    }

    .custom-card {
        background: #212529;
        border: 1px solid #373b3e;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .custom-card-header-mini {
        background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        /* Warna hijau kebiruan untuk Level */
        color: white;
        border-radius: 12px 12px 0 0;
        padding: 15px;
        text-align: center;
    }

    .form-control {
        background-color: #2b3035;
        border: 1px solid #495057;
        color: #f8f9fa;
    }

    .form-control:focus {
        background-color: #2b3035;
        color: #f8f9fa;
        border-color: #2b20c9;
        box-shadow: 0 0 0 0.25rem rgba(32, 201, 151, 0.25);
    }

    .form-floating>label {
        color: #adb5bd;
    }
</style>

<div class="container mt-5 mb-5 form-wrapper-mini">
    <div class="card custom-card">
        <div class="card-header custom-card-header-mini border-0">
            <h4 class="mb-0"><i class="bi bi-diagram-3-fill me-2"></i>Form Level / Jenjang</h4>
        </div>

        <div class="card-body p-4">
            <form method="POST" action="controller/jenisController.php">

                <div class="form-floating mb-4 mt-2">
                    <input type="text" name="nama" class="form-control form-control-lg" id="nama_level"
                        placeholder="Contoh: S1, SMA" value="<?= val($row, 'nama') ?>" required>
                    <label for="nama_level">Nama Jenjang (Contoh: S1, SMA, SMP)</label>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="index.php?hal=jenis_list" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <div>
                        <button type="submit" name="proses" value="<?= empty($id) ? 'simpan' : 'ubah' ?>"
                            class="btn btn-primary px-4">
                            <i class="bi bi-check-circle me-1"></i> <?= empty($id) ? 'Simpan' : 'Update' ?>
                        </button>
                        <?php if ($id): ?><input type="hidden" name="idx" value="<?= $id ?>"><?php endif; ?>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
</div>
