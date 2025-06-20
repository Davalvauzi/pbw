<h2>Menentukan Angka Genap atau Ganjil (Ternary Operator)</h2>

<?php
$angka = 7; // Contoh angka, Anda bisa menggantinya

$hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

echo "<p>Angka: " . $angka . "</p>";
echo "<p>Hasil: " . $hasil . "</p>";
?>