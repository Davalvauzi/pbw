<?php include 'nav.php';

session_start();
       if (!isset($_SESSION['login_Un51k4'])) {
            header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
           exit;
       }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Tambah Pelanggan</title>
</head>
<body>
   <div class="container mt-4">
       <h2>Tambah Pelanggan Baru</h2>
       <form method="post" action="proses_tambah_pelanggan.php">
           <div class="mb-3">
               <label for="judul" class="form-label">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" required>
           </div>
           <div class="mb-3">
               <label for="judul" class="form-label">Alamat</label>
               <input type="text" class="form-control" id="alamat" name="alamat" required>
           </div>
           <div class="mb-3">
               <label for="judul" class="form-label">Email</label>
               <input type="text" class="form-control" id="email" name="email" required>
           </div>
           <div class="mb-3">
               <label for="judul" class="form-label">Telepon</label>
               <input type="text" class="form-control" id="telepon" name="telepon" required>
           </div>
           <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
       </form>
   </div>
</body>
</html>
