<?php
require 'function.php';

$result = query("SELECT * FROM baju");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Tugas Nabila WAD</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@100;400&display=swap" rel="stylesheet">
    <style>
        /* Custom CSS untuk mengatur tampilan navbar */
        .navbar {
            background-color: #fff; /* Warna latar belakang putih */
            padding: 20px 0;
        }

        .navbar-brand {
            font-family: 'EB Garamond', serif; /* Menggunakan font EB Garamond */
            font-size: 40px;
            font-weight: 100; /* Menjadikan tipis */
            color: #000; /* Warna teks hitam */
        }

        .navbar-nav .nav-link {
            font-size: 17px; /* Ukuran teks 17px */
            font-weight: 100; /* Menjadikan tipis */
            color: #000; /* Warna teks hitam */
        }
    
        .custom-card {
            position: relative;
            width: auto;
            height: 300px;
            background-color: #fff;
        }

        .custom-card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background-color: #fff;
            z-index: 1;
        }

        .table-dark {
            border: 5px solid white;
            background-color: white; /* Background color of the table */
            color: black;
        }

        .table-dark th, .table-dark td {
            border: 5px solid white;
            text-align: center; /* Center align text in cells */
        }

        .container-table {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }


    
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">COCO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0"> <!-- Menggunakan ml-auto untuk align right -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BRIDAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COUTURE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">COLLABORATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Gambar Aesthetic Image -->
    <div class="card text-bg-dark">
        <img id="myImage" src="gambar.png" alt="Aesthetic Image">
        <div class="card-img-overlay" style="text-align: right; position: absolute; top: 50%; right: 20px; transform: translateY(-50%);">
            <h5 class="card-title" style="font-family: 'EB Garamond', serif; font-size: 23px; color: #fff; font-weight: 300; line-height: 1.5;">
                "My aesthetic is simple lines elegance, modern <br> architectural, and very clean femininity with a <br> twist of drama."
            </h5>
        </div>
    </div>

    <!-- Informasi COCO -->
    <div class="custom-card" style="position: relative; width: auto; height: 400px; background-color: #8a8787; display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center;">
            <h1 style="font-family: 'EB Garamond', serif; font-size: 40px; font-weight: 130; letter-spacing: 3px; margin: 0; line-height: 2.5; color: #000000;">COCO</h1>
            <h6 style="font-family: 'EB Garamond', serif; font-size: 15px; font-weight: 170; margin: -1px; text-align: center; display: inline; color: #000000;">
                COCO is a Jakarta-based luxury fashion brand that seamlessly blends classic, timeless aesthetics with a modern twist.<br>Our brand, founded in 1999, is dedicated to crafting impeccable, high-end pieces that cater to independent and style-conscious individuals.<br><br>Inspired by elegant femininity, we are known for our commitment to quality and meticulous attention to detail.<br>Our collections are designed and produced locally at our Jakarta atelier, ensuring that each piece embodies the essence of sophisticated fashion.
            </h6>
        </div>
    </div>

    <!-- Judul COCO FASHION COLLECTION -->
<!-- Judul COCO FASHION COLLECTION -->
<div style="height: 50px; background-color: #fff;"></div>
<div style="text-align: center;">
    <h1 style="font-family: 'EB Garamond', serif; font-size: 40px; font-weight: 100; letter-spacing: 3px; margin: 0; line-height: 2.5; color: #000000;">COCO FASHION COLLECTION</h1>
    <div class="container pt-4 container-table">
        <div class="row justify-content-center"> <!-- Center the columns -->
            <?php foreach ($result as $index => $row) : ?>
                <div class="col">
                    <div class="card mb-3" style="max-width: 350px;">
                        <img src="<?= $row["gambar"]; ?>" class="card-img-top" alt="<?= $row["gambar"]; ?>">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'EB Garamond'; font-size: 16px; font-weight: 130;"><?= $row["nama_prod"]; ?></h5>
                            <p class="card-text" style="font-family: 'EB Garamond'; font-size: 14px; font-weight: 100;"><?= $row["keterangan"]; ?></p>
                            <p class="card-text" style="font-family: 'EB Garamond'; font-size: 12px; font-weight: 100; color: #ACACAC;">
                                Kode Produk: <?= $row["kode_prod"]; ?>
                            </p>
                            <hr style="border-color: #ccc; margin-top: 10px; margin-bottom: 10px;">
                            <p class="card-text" style="font-family: 'EB Garamond'; font-size: 16px; font-weight: bold; margin-bottom: 5px;">
                                <?= $row["harga"]; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <?php
                // Jarakkan kartu kedua dengan kartu pertama
                if ($index % 2 === 0 && $index !== 0) {
                    echo '<div class="w-100 d-md-none d-lg-none d-xl-none"></div>'; // Tambahkan baris baru setelah setiap dua kartu pada tampilan mobile
                    echo '<div class="w-100 d-none d-md-block d-lg-block d-xl-block"></div>'; // Tambahkan baris baru setelah setiap dua kartu pada tampilan desktop
                }
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container text-center">
        <a class="btn btn-secondary btn-lg" href="D:\xampp\htdocs\wad\week 7\latihan3\tambah.php" role="button">TAMBAH DATA</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>
</html>