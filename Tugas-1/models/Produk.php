<?php
class Produk
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function index()
    {
        // UBAH kata INNER JOIN menjadi LEFT JOIN
        $sql = "SELECT studies.*, level.nama AS jenjang 
                FROM studies
                LEFT JOIN level ON level.id = studies.idlevel
                ORDER BY studies.tahun_lulus DESC";

        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO studies (nama, idlevel, keterangan, tahun_lulus, foto_sekolah)
                VALUES (?,?,?,?,?)";
        $this->koneksi->prepare($sql)->execute($data);
    }

    public function getProduk($id)
    {
        // UBAH INNER JOIN menjadi LEFT JOIN di sini
        $sql = "SELECT studies.*, level.nama AS jenjang
                FROM studies 
                LEFT JOIN level ON level.id = studies.idlevel 
                WHERE studies.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        return $ps->fetch();
    }

    public function ubah($data)
    {
        $sql = "UPDATE studies SET nama=?, idlevel=?, keterangan=?, tahun_lulus=?, foto_sekolah=? 
                WHERE id = ?";
        $this->koneksi->prepare($sql)->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM studies WHERE id = ?";
        $this->koneksi->prepare($sql)->execute([$id]);
    }
}