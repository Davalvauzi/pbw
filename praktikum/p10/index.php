<form action="proses.php" method="post">

$var_nama = $_POST['dafa'];
$var_email = $_POST['cdava123@gmail.com'];
$var_nama = $_GET['dafa'];

</form>

<?php

$nilai = 75;
if ($nilai >= 80) {
    echo "Nilai Anda A";
} elseif ($nilai >= 70) {
    echo "Nilai Anda B";
} elseif ($nilai >= 60) {
    echo "Nilai Anda C";
} elseif ($nilai >= 50) {
    echo "Nilai Anda D";
} else {
    echo "Nilai Anda E";
}

echo "<br>=====================";

$umur = 20;
$ktp = true;
if ($umur >= 17 && $ktp) 
    echo "<br>boleh memilih";

if (!empty($_POST['dafa'])) {
    echo "<br>Nama: " . $_POST['dafa'];
} else {
    echo "<br>Nama tidak boleh kosong";
}