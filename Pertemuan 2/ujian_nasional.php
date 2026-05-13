<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ujian Nasional</h1>
    <form method="POST" action="">
        <label>Nama Siswa</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Nilai Matematika</label><br>
        <input type="number" name="nilai_matematika" required><br><br>

        <label>Nilai Bahasa Indonesia</label><br>
        <input type="number" name="nilai_bahasa_indonesia" required><br><br>

        <label>Nilai Bahasa Inggris</label><br>
        <input type="number" name="nilai_bahasa_inggris" required>

        <button type="submit" name="hasil">Hasil Nilai</button>
    </form>

     <?php
     if (isset($_POST['hasil'])) {

        echo "<h2>Hasil Ujian Nasional</h2>";
        //ambil data dari form
        $nama = $_POST['nama'];
        $nilai_matematika = $_POST['nilai_matematika'];
        $nilai_bahasa_indonesia = $_POST['nilai_bahasa_indonesia'];
        $nilai_bahasa_inggris = $_POST['nilai_bahasa_inggris'];

        echo "Nama Siswa: " . htmlspecialchars($nama) . "<br>";
        echo "Nilai Matematika: " . htmlspecialchars($nilai_matematika) . "<br>";
        echo "Nilai Bahasa Indonesia: " . htmlspecialchars($nilai_bahasa_indonesia) . "<br>";
        echo "Nilai Bahasa Inggris: " . htmlspecialchars($nilai_bahasa_inggris) . "<br>";
        
        //hitung rata-rata
        $rata_rata = ($nilai_matematika + $nilai_bahasa_indonesia + $nilai_bahasa_inggris) / 3;
        echo "rata-rata nilai: " . number_format($rata_rata, 2) . "<br>";

        //tentukan kelulusan
        if ($rata_rata >= 60) {
            echo "Status: Lulus<br>";
        } else {
            echo "Status: Tidak Lulus<br>";
        }

        //tampilkan grade
        $grade = "";
        if ($rata_rata >= 90) {
            echo "Grade: A<br>";
            $grade = "A";
        } elseif ($rata_rata >= 80) {
            echo "Grade: B<br>";
            $grade = "B";
        } elseif ($rata_rata >= 70) {
            echo "Grade: C<br>";
            $grade = "C";
        } elseif ($rata_rata >= 60) {
            echo "Grade: D<br>";
            $grade = "D";
        } else {
            echo "Grade: E<br>";
            $grade = "E";
        }
    }

    ?>
</body>
</html>