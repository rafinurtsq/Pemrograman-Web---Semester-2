<?php
class User
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username=? AND password=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$username, md5($password)]);
        return $ps->fetch();
    }
}
?>