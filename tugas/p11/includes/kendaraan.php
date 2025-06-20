<h2>Menentukan Jenis Kendaraan Berdasarkan Jumlah Roda</h2>

<?php
$jumlahRoda = 4; // Contoh jumlah roda, Anda bisa menggantinya

echo "<p>Jumlah roda: " . $jumlahRoda . "</p>";
echo "<p>Jenis kendaraan: ";

switch ($jumlahRoda) {
    case 2:
        echo "Motor";
        break;
    case 3:
        echo "Bajaj / Sepeda Roda Tiga";
        break;
    case 4:
        echo "Mobil";
        break;
    case 6:
        echo "Truk / Bus";
        break;
    default:
        echo "Tidak Diketahui";
        break;
}
echo "</p>";
?>