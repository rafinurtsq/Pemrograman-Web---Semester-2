<?php
class Jenis
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function index()
    {
        // UBAH DARI 'jenis' MENJADI 'level'
        $sql = "SELECT * FROM level";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data)
    {
        // UBAH DARI 'jenis' MENJADI 'level'
        $sql = "INSERT INTO level (nama) VALUES (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getJenis($id)
    {
        // UBAH DARI 'jenis' MENJADI 'level'
        $sql = "SELECT * FROM level WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        return $ps->fetch();
    }

    public function ubah($data)
    {
        // UBAH DARI 'jenis' MENJADI 'level'
        $sql = "UPDATE level SET nama=? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        // UBAH DARI 'jenis' MENJADI 'level'
        $sql = "DELETE FROM level WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
?>