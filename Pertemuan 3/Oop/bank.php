<?php


//windsurf refactor explain
class Bank {
    protected $norek;
    public $nama;
    private $saldo;
    static $jumlah = 0;

    const BANK = "Bank BCA";

    public function __construct($norek, $nama, $saldo) {
        $this->norek = $norek;
        $this->nama = $nama;
        $this->saldo = $saldo;

    
        self::$jumlah++;
    }

    public function setor($uang) {
        $this->saldo += $uang;
    }

    public function tarik($uang) 
    {
            $this->saldo -= $uang;
    }

    public function cetak() {
        echo "Norek: " . $this->norek . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Saldo: Rp." .number_format($this->saldo, 0, ',', '.') . "<br>";
        echo "<hr>";
    }
}