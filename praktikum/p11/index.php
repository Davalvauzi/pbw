<?php
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah Senin";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa";
        break;
    case "Rabu":
        echo "Hari ini adalah Rabu";
        break;
    case "Kamis":
        echo "Hari ini adalah Kamis";
        break;
    case "Jumat":
        echo "Hari ini adalah Jumat";
        break;
    case "Sabtu":
        echo "Hari ini adalah Sabtu";
        break;
    case "Minggu":
        echo "Hari ini adalah Minggu";
        break;
    default:
        echo "Hari biasa";
}

for ($i = 1; $i <= 10; $i++) {
    echo "<br>Angka ke- " . $i;
}

echo "<br>=====================";

$buah = ['apel', 'jeruk', 'mangga', 'pisang'];

for ($i = 0; $i < count($buah); $i++) {
    echo "<br>Buah ke- " . ($i + 1) . " adalah " . $buah[$i];
}

echo "<br>=====================";

$nilai = 1;

while ($nilai <= 5) {
    echo "<br>Nilai ke- " . $nilai;
    $nilai++;
}

echo "<br>=====================";

$mahasiswa = [
    ['nama' => 'Budi', 'nim' => '12345'],
    ['nama' => 'Siti', 'nim' => '67890'],
    ['nama' => 'Andi', 'nim' => '54321']
];
foreach ($mahasiswa as $mhs) {
    echo "<br>Nama: " . $mhs['nama'] . ", NIM: " . $mhs['nim'];
}

$umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";
echo "<br>Status: " . $status;

echo "<br>=====================<br>";

include 'menu.php';