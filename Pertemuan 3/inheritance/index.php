<?php
require_once 'dosen.php';
require_once 'mahasiswa.php';

//buat objek dosen
$d1 = new Dosen('Dr. Budi', 'Laki-laki', '12345678', 'S.Kom, M.Kom');
$d2 = new Dosen('Dr. Siti', 'Perempuan', '87654321', 'S.Si, M.Si');  
$d3 = new Dosen('Dr. Andi', 'Laki-laki', '11223344', 'S.T, M.T');
$d4 = new Dosen('Dr. Rina', 'Perempuan', '44332211', 'S.M.Pd');

//buat objek mahasiswa
$m1 = new Mahasiswa('Ahmad', 'Laki-laki', '5', 'Teknik Informatika');
$m2 = new Mahasiswa('Siti', 'Perempuan', '3', 'Sistem Informasi');
$m3 = new Mahasiswa('Andi', 'Laki-laki', '7', 'Teknik Mesin');
$m4 = new Mahasiswa('Rina', 'Perempuan', '1', 'Teknik Elektro');

$data = array($d1,$d2,$d3,$d4,$m1,$m2,$m3,$m4);
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Dosen dan Mahasiswa</title>

<style>
body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{
    width:800px;
    margin:auto;
}

h1{
    text-align:center;
}

.card{
    background:white;
    padding:15px;
    margin:10px 0;
    border-radius:8px;
    box-shadow:0 2px 5px rgba(0,0,0,0.2);
}
</style>

</head>

<body>

<div class="container">

<h1>Data Dosen dan Mahasiswa</h1>

<?php
foreach($data as $d){
    echo "<div class='card'>";
    $d->cetak();
    echo "</div>";
}
?>

</div>

</body>
</html>