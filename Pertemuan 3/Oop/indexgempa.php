<?php

require 'gempa.php';

//membuat objek dari class Gempa
$g1 = new Gempa("Jakarta", 8.5);
$g2 = new Gempa("Bandung", 2.7);
$g3 = new Gempa("Surabaya", 4.3);

//output
echo "<h3>Data Gempa</h3>";
$g1->cetak();
$g2->cetak();
$g3->cetak();
