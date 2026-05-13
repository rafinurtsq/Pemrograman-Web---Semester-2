<?php
// HAPUS KODE REDIRECT DI SINI. Biarkan semua orang bisa masuk.

// Kolom untuk riwayat studi
$ar_judul = ['No', 'Nama Sekolah', 'Jenjang', 'Tahun Lulus', 'Keterangan', 'Foto', 'Aksi'];

$obj_produk = new Produk();
$rs = $obj_produk->index();
?>

<style>
    .table-container {
        background: #2a2a2f;
        border: 1px solid #3a3a3f;
        border-radius: 8px;
        padding: 16px;
        color: #e2e8f0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .table-container h3 {
        color: #fafafa;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .table-dark-custom {
        width: 100%;
        border-collapse: collapse;
        color: #e5e7eb;
    }

    .table-dark-custom thead {
        background: #2f2f34;
    }

    .table-dark-custom th,
    .table-dark-custom td {
        padding: 12px;
        border-bottom: 1px solid #3a3a3f;
        vertical-align: middle;
    }

    .table-dark-custom tbody tr:hover {
        background: #3a3a3f;
    }

    .btn-custom {
        background: #3f3f46;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 13px;
        padding: 6px 12px;
        text-decoration: none;
        display: inline-block;
        transition: 0.2s;
    }

    .btn-custom:hover {
        background: #52525b;
        color: #fff;
    }

    .btn-danger-custom {
        background: #7f1d1d;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 13px;
        padding: 6px 12px;
        transition: 0.2s;
    }

    .btn-danger-custom:hover {
        background: #991b1b;
    }

    .img-list {
        width: 60px;
        height: 45px;
        object-fit: cover;
        border-radius: 4px;
        border: 1px solid #3a3a3f;
    }
</style>

<div class="container mt-4 mb-5">
    <div class="table-container">

        <h3>Daftar Riwayat Pendidikan</h3>

        <?php if (isset($_SESSION['user'])): ?>
            <a href="index.php?hal=produk_form" class="btn btn-custom mb-3">
                + Tambah Riwayat
            </a>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table-dark-custom">
                <thead>
                    <tr>
                        <?php foreach ($ar_judul as $jdl): ?>
                            <th><?= $jdl ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (!empty($rs)) {
                        $no = 1;
                        foreach ($rs as $row) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="fw-bold"><?= htmlspecialchars($row['nama']) ?></td>
                                <td><small class="text-info"><?= $row['jenjang'] ?></small></td>
                                <td><?= $row['tahun_lulus'] ?></td>
                                <td style="font-size: 0.9rem; color: #adb5bd;"><?= $row['keterangan'] ?></td>
                                <td>
                                    <?php $foto = (!empty($row['foto_sekolah'])) ? $row['foto_sekolah'] : 'nophoto.jpg'; ?>
                                    <img src="img/<?= $foto ?>" class="img-list" />
                                </td>
                                <td>
                                    <form method="POST" action="controller/produkController.php" style="display:inline;">

                                        <a href="index.php?hal=produk_detail&id=<?= $row['id'] ?>"
                                            class="btn btn-custom btn-sm">Detail</a>

                                        <?php if (isset($_SESSION['user'])): ?>
                                            <a href="index.php?hal=produk_form&id=<?= $row['id'] ?>"
                                                class="btn btn-custom btn-sm">Edit</a>

                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <button type="submit" name="proses" value="hapus" class="btn btn-danger-custom btn-sm"
                                                onclick="return confirm('Yakin hapus data ini?')">
                                                Hapus
                                            </button>
                                        <?php endif; ?>

                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="7" class="text-center py-4">Data riwayat belum tersedia</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>