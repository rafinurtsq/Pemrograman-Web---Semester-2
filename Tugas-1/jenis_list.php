<?php
// HAPUS KODE REDIRECT DI SINI

$obj = new Jenis();
$rs = $obj->index();
?>

<style>
  .table-container {
    background: #2a2a2f;
    border: 1px solid #3a3a3f;
    border-radius: 8px;
    padding: 16px;
    color: #e5e7eb;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
  }

  .table-container h3 {
    color: #fafafa;
    margin-bottom: 15px;
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
    padding: 10px;
    border-bottom: 1px solid #3a3a3f;
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
    padding: 5px 10px;
    text-decoration: none;
    display: inline-block;
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
    padding: 5px 10px;
  }

  .btn-danger-custom:hover {
    background: #991b1b;
  }
</style>

<div class="container mt-3 mb-5">
  <div class="table-container">

    <h3>Data Level (Jenjang Pendidikan)</h3>

    <?php if (isset($_SESSION['user'])): ?>
      <a href="index.php?hal=jenis_form" class="btn btn-custom mb-3">
        + Tambah Level
      </a>
    <?php endif; ?>

    <table class="table-dark-custom">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th>Nama Level</th>
          <th width="25%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($rs)) {
          $no = 1;
          foreach ($rs as $row) { ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= htmlspecialchars($row['nama']) ?></td>
              <td>
                <form method="POST" action="controller/jenisController.php" style="display:inline;">

                  <a href="index.php?hal=jenis_detail&id=<?= $row['id'] ?>" class="btn btn-custom btn-sm">Detail</a>

                  <?php if (isset($_SESSION['user'])): ?>
                    <a href="index.php?hal=jenis_form&id=<?= $row['id'] ?>" class="btn btn-custom btn-sm">Edit</a>

                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit" name="proses" value="hapus" class="btn btn-danger-custom btn-sm"
                      onclick="return confirm('Yakin hapus data ini?')">
                      Hapus
                    </button>
                  <?php endif; ?>

                </form>
              </td>
            </tr>
          <?php }
        } else { ?>
          <tr>
            <td colspan="3" class="text-center">Data level belum tersedia</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
</div>