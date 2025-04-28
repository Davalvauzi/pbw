<?php
    echo "<h1>Praktikum P9</h1>",

    $nama = "John Doe";
    $umur = 25;

    //menampilkan variabel
    echo "<p>Nama: $nama</p>";
    echo "<p>Umur: $umur</p>";

    define('nama_konstanta', 'John Doe');
    define('umur_konstanta', 25);

    echo "selamat datang " .nama_konstanta. "<br>";
    echo "umur " .nama_konstanta. " adalah " .umur_konstanta. "<br>";

    echo "nama saya adalah". $nama. "<br>";
    echo "umur saya adalah". $umur. "<br>";

    $berat = 70.5;
    echo "berat saya adalah". $berat. "<br>";

    $isLogin = true;
    echo "apakah saya sudah login? " . ($isLogin ? 'sudah' : 'belum') . "<br>";

    $buah = ['apel', 'jeruk', 'mangga'];
    echo "buah kesukaan saya adalah " . $buah[0] . "<br><br>";

    class Mahasiswa {
        public $nama;
        public function sapa() {
            return "Halo, nama saya " . $this->nama;
        }
    }

    $mhs = new Mahasiswa();
    $mhs->nama = "Jenifer";
    echo $mhs->sapa() . "<br>";

    $data = null;
    var_dump($data);
    
?>