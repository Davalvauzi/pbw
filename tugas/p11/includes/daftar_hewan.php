<h2>Daftar Nama Hewan</h2>

<?php
$daftarHewan = ["Kucing", "Anjing", "Burung", "Ikan", "Kelinci", "Ular"];

echo "<ul>";
foreach ($daftarHewan as $hewan) {
    echo "<li>" . $hewan . "</li>";
}
echo "</ul>";
?>