<?php
include_once '../koneksi.php';
include_once '../models/Produk.php';

$nama = $_POST['nama'];
$idlevel = $_POST['idlevel'];
$keterangan = $_POST['keterangan'];
$tahun_lulus = $_POST['tahun_lulus'];
$foto_sekolah = $_POST['foto_sekolah'];
$tombol = $_POST['proses'];

$data = [$nama, $idlevel, $keterangan, $tahun_lulus, $foto_sekolah];

$obj_produk = new Produk();
switch ($tombol) {
    case 'simpan':
        $obj_produk->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj_produk->ubah($data);
        break;
    case 'hapus':
        $obj_produk->hapus($_POST['id']);
        break;
}

header('Location: ../index.php?hal=produk_list');