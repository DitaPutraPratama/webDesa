<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/e19e76c095.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<?php
include("koneksi.php");
session_start();
?>

<body>
    <?php
    include('asset/header.php');
    ?>

    <div class="menu" style="margin-top: 80px;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ms-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mt-1 pt-4 pb-2 mb-1" style=" font-size:18px;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#info">Info Desa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#berita">Berita</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                        <?php
                        if (isset($_SESSION['nama'])) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
                        <?php } elseif (empty($_SESSION['nama']) or !isset($_SESSION['nama'])) { ?>
                            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <?php } ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="about">
        <div class="container-fluid m-0 p-3 wrapper border-bottom-0 bg-dark">
            <div class="banner">
                <div class="px-4 py-5 my-5 text-center text-light">
                    <h5 class="display-6 fw-bold">WEBSITE KELURAHAN KRANDEGAN.</h5>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4 text-sm">Website Kelurahan Krandegan ini dibangun untuk memenuhi tugas Project Ulangan Akhir Semester Mata Kuliah Pemrogrsmsn WEB 2 yang dibimbing oleh bapak Moh. Muhtarom, S.E.,S.Kom.,M.Kom selaku dosen matakuliah Pemrograman Web 2, S-1 Teknik Informatika, Fakultas Ilmu Komputer, Universitas Duta Bangsa, Surakarta. Taahun 2022</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-primary btn-md px-4 gap-3"><a href="#penyusun" class="text-light" style="text-decoration: none;">Disusun Oleh</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="penyusun mt-5 ms-5 me-5" id="penyusun" style="max-width: 95%;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card border border-danger">
                    <div class="card-body">
                        <center>
                            <img class="rounded" src="img/foto.png" alt="Fitroh" srcset="">
                            <h5 class="card-title text-danger mt-3">Nama :</h5>
                            <p class="card-text">Fitroh Ahmad Abdul Aziz</p>
                            <h5 class="card-title text-danger mt-3">NIM :</h5>
                            <p class="card-text">200103097</p>
                            <h5 class="card-title text-danger mt-3">Kelas :</h5>
                            <p class="card-text">TI20 A4</p>
                        </center>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border border-danger">
                    <div class="card-body">
                        <center>
                            <img class="rounded" src="img/admin.jpg" alt="Dita" srcset="" width="205px" height="270">
                            <h5 class="card-title text-danger mt-3">Nama :</h5>
                            <p class="card-text">Dita Putra Pratama</p>
                            <h5 class="card-title text-danger mt-3">NIM :</h5>
                            <p class="card-text">200103093</p>
                            <h5 class="card-title text-danger mt-3">Kelas :</h5>
                            <p class="card-text">TI20 A4</p>
                        </center>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
    include("asset/footer.php")
    ?>
</body>

</html>