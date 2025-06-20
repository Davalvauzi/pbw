<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Program PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav { background-color: #f2f2f2; padding: 10px; margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; }
    </style>
</head>
<body>
    <h1>Contoh Penggunaan PHP</h1>

    <?php include 'includes/nav.php'; ?>

    <div class="content">
        <?php
        // Logika untuk menampilkan konten berdasarkan parameter URL
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'kendaraan':
                    include 'includes/kendaraan.php';
                    break;
                case 'bilangan_genap':
                    include 'includes/bilangan_genap.php';
                    break;
                case 'daftar_hewan':
                    include 'includes/daftar_hewan.php';
                    break;
                case 'genap_ganjil':
                    include 'includes/genap_ganjil.php';
                    break;
                default:
                    echo "<p>Selamat datang! Pilih salah satu program dari navigasi di atas.</p>";
                    break;
            }
        }
        ?>
    </div>

</body>
</html>