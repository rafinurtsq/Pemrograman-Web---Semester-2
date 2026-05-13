<?php

require_once 'person.php';

class Mahasiswa extends Person{
    public $semester;
    public $prodi;

    public function __construct($nama,$gender,$semester,$prodi){
        parent::__construct($nama,$gender);
        $this->semester = $semester;
        $this->prodi = $prodi;
    }

    public function cetak(){
        parent::cetak();
        echo "<br>Semester : ".$this->semester;
        echo "<br>Prodi : ".$this->prodi;
    }
}
?>