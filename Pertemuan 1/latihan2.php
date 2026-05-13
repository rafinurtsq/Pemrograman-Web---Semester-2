<?php
//data awal
$nama = "budi";
$totalBelanja = 10000;
$nilai = 90;

//code if else - total belanja
if($totalBelanja > 10000) {
    $keterangan = "Selamat $nama, anda mendapatkan hadiah";
} else {
    $keterangan = "Terimakasih $nama, sudah berbelanja di toko kami";

}

//ternary - kelulusan
$ketlulus = ($nilai >= 60) ? "lulus" : "Maaf $nama, anda tidak lulus";  

//if multi kondisi - grade
if($nilai >= 85 && $nilai <= 100) {
    $grade = "A";
} elseif($nilai >= 75 && $nilai < 85) {
    $grade = "B";
} elseif($nilai >= 60 && $nilai < 75) {
    $grade = "C";
} elseif($nilai >= 30 && $nilai < 60) {
    $grade = "D";
} else {
    $grade = "E";
}

// switch case - predikat
switch ($grade) {
    case 'A':
        $predikat = "Memuaskan";
        break;
    case 'B':
        $predikat = "Bagus";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Buruk";
        break;
    default:
        $predikat = "-";
}

?>

<h3>Data Belanja</h3>
Nama Pelanggan: <?= $nama; ?> <br/>
Total Belanja: RP <?= number_format($totalBelanja); ?> <br/>
Keterangan: <?= $keterangan; ?>
<hr>

<h3>Data Nilai</h3>
Nama Siswa: <?= $nama; ?> <br/>
Nilai: <?= $nilai; ?> <br/>
Status: <?= $ketlulus; ?><br>
Grade: <?= $grade ?><br>
Predikat: <?= $predikat; ?>

