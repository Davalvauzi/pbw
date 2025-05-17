<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>

<h2>Form Data Mahasiswa dan Diskon UKT</h2>

<form method="post" action="">
    NPM: <input type="text" name="npm"><br>
    Nama: <input type="text" name="nama"><br>
    Prodi: <input type="text" name="prodi"><br>
    Semester: <input type="number" name="semester"><br>
    Biaya UKT: <input type="number" name="ukt"><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $semester = $_POST["semester"];
    $ukt = $_POST["ukt"];

    $diskon = 0;

    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon += 5; 
        }
    }

    $potongan = $ukt * $diskon / 100;
    $bayar = $ukt - $potongan;

    echo "<h3>Hasil:</h3>";
    echo "NPM : $npm<br>";
    echo "NAMA : $nama<br>";
    echo "PRODI : $prodi<br>";
    echo "SEMESTER : $semester<br>";
    echo "BIAYA UKT : "($ukt) . "<br>";
    echo "DISKON : $diskon%<br>";
    echo "YANG HARUS DIBAYAR : "($bayar) . "<br>";
}
?>

</body>
</html>
