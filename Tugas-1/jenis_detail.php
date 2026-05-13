<?php
$id = $_GET['id'] ?? null;

$obj = new Jenis();
$row = $obj->getJenis($id);
?>

<style>
    .detail-container {
        background: #2a2a2f;
        border: 1px solid #3a3a3f;
        border-radius: 8px;
        padding: 16px;
        color: #e5e7eb;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
    }

    .detail-container h3 {
        color: #fafafa;
        margin-bottom: 15px;
    }

    /* TABLE */
    .table-dark-custom {
        width: 100%;
        border-collapse: collapse;
    }

    .table-dark-custom th {
        width: 30%;
        color: #a1a1aa;
        padding: 10px;
        border-bottom: 1px solid #3a3a3f;
        text-align: left;
    }

    .table-dark-custom td {
        color: #e5e7eb;
        padding: 10px;
        border-bottom: 1px solid #3a3a3f;
    }

    /* BUTTON */
    .btn-custom {
        background: #3f3f46;
        border: none;
        border-radius: 5px;
        color: #fff;
        padding: 6px 12px;
        font-size: 14px;
    }

    .btn-custom:hover {
        background: #52525b;
    }
</style>

<div class="container mt-3">
    <div class="detail-container">

        <h3>Detail Jenis</h3>

        <table class="table-dark-custom">
            <tr>
                <th>ID</th>
                <td><?= $row['id'] ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $row['nama'] ?></td>
            </tr>
        </table>

        <br>

        <a href="index.php?hal=jenis_list" class="btn btn-custom">
            ⬅ Kembali
        </a>

    </div>
</div>