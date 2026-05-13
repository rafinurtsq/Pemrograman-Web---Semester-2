<?php

require 'bank.php';

//membuat objek dari class Bank
$n1 = new Bank("001", "Andi", 1000000);
$n2 = new Bank("002", "Budi", 2000000);
$n3 = new Bank("003", "Cici", 3000000);
$n4 = new Bank("004", "Dedi", 4000000);

//melakukan transaksi setor
$n1->setor(500000);
$n2->setor(1000000);
$n3->setor(1500000);
$n4->setor(2000000);

//melakukan transaksi tarik
$n1->tarik(200000);
$n2->tarik(500000);
$n3->tarik(1000000);
$n4->tarik(2000000);

//output
echo "<h3>" . Bank::BANK . "</h3>";
$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();

echo "Jumlah nasabah: " . Bank::$jumlah;
