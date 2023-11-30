<?php 
require 'function.php';

$kode_prod = $_GET ["kode_prod"];

$baju = read("SELECT * FROM baju WHERE kode_prod = '$kode_prod'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../latihan1/index.php';
        </script>
        ";
    }else {
        
        echo "
        <script>
            alert('DATA GAGAL DIUBAH');
            document.location.href = '../latihan1/index.php';
        </script>
        ";
        
    }

   
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COCO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../latihan1/index.php">
        
        <h1 style="font-family: 'EB Garamond', serif; font-size: 40px; font-weight: 100; letter-spacing: 3px; margin: 0; line-height: 2.5; color: #000000;">COCO FASHION COLLECTION</h1>
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar</label>
                <input type="text" class="form-control" id="gambar" name ="gambar" required disabled value="<?= $baju ["gambar"];?>" >
            </div>
            <div class="mb-3">
                <label for="nama_prod" class="form-label">nama_prod</label>
                <input type="text" class="form-control" id="nama_prod" name ="nama_prod" required value="<?= $baju ["nama_prod"];?>">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">keterangan</label>
                <input type="text" class="form-control" id="keterangan" name ="keterangan" required value="<?= $baju ["keterangan"];?>">
            </div>
            <div class="mb-3">
                <label for="kode_prod" class="form-label">kode_produk</label>
                <input type="text" class="form-control" id="kode_prod" name ="kode_prod" required value="<?= $baju ["kode_prod"];?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input type="text" class="form-control" id="harga" name ="harga" required value="<?= $baju ["harga"];?>">
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">UBAH !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>