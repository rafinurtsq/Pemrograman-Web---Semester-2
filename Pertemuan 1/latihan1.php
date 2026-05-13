<?php
//belajar variabel
$namaSiswa = "Budi Santoso";
$umur = 20;
$berat_badan = 30.5;
$_pekerjaan = 'Mahasiswa';
//cetak variabel di dalam program PHP
echo 'Nama Siswa: '.$namaSiswa;
echo '<br/>Umur: '.$umur.' tahun';
echo '<br/>Berat Badan 1: '.$berat_badan.' kg';
echo "<br/>Berat Badan 2: $berat_badan kg";
echo '<br/>Berat Badan 3: $berat_badan kg';
echo '<br/>Pekerjaan 1: '.$_pekerjaan;
print '<br/>Pekerjaan 2: '.$_pekerjaan;
echo '<hr>';

//opersai dalam output
echo 'Nama Siswa 1: '.$namaSiswa;
echo '<br/>Nama Siswa 2: '.$namaSiswa.' '.$_pekerjaan;
echo '<br/>Umur: '.($umur + $berat_badan).' tahun';
echo '<br/>Berat Badan : '.$berat_badan.' kg';
echo '<br/>Pekerjaan: '.$_pekerjaan;
echo '<hr>';

//variabel konstanta
$jari2 = 15;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;
echo "luas lingkaran dengan jari-jari $jari2 = $luas";
echo '<hr>';

//variabel bawaan php
echo 'dokumen php saya ada di: '.$_SERVER['DOCUMENT_ROOT'];
echo '<br/>nama file saya: '.$_SERVER['PHP_SELF'];
echo '<hr>';

?>