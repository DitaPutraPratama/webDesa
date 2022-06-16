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
    <title>WEBSITE</title>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#info">Info Desa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#berita">Berita</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
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



    <!-- banner -->
    <div class="container-fluid m-0 p-3 wrapper border-bottom-0 border-dark" style="background-image: url('img/bg.png');">
        <div class="banner">
            <div class="px-4 py-5 my-5 text-center text-light">
                <h5 class="display-6 fw-bold">WEBSITE KELURAHAN KRANDEGAN.</h5>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4 text-sm">Website ini merupakan jendela informasi untuk memperkenalkan wilayah Kelurahan Desa Krandegan,yang meliputi kondisi umum Kelurahan Krandegan yang dapat dilihat oleh semua lapisan masyarakat bukan hanya yang berada di wilayah Kelurahan Desa Krandegan namun juga diseluruh wilayah indonesia.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-md px-4 gap-3"><a href="sejarah.php" class="text-light" style="text-decoration: none;">Sejarah Desa</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid justify-content-center" id="info" style="height: auto; padding-top:120px;width:95%;">
        <h1 class="  fw-bold ms-4" style="text-align: justify; border-bottom: 2px solid #363636; display: inline-block;">INFO <span class="text-danger">DESA</span></h1>
        <div class="row pt-3">
            <div class="col-6">
                <div id="perangkat-desa">
                    <h4 class="ms-4 pb-2">Perangkat Desa</h4>
                    <?php
                    include('asset/perangkat-desa.php')
                    ?>
                </div>
            </div>
            <div class="col-6 gap-0">
                <div id="perangkat-desa">
                    <h4 class="ms-4 pb-2">Lokasi Desa</h4>
                    <?php
                    include('asset/lokasi.php')
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita Desa -->
    <div id="berita" class="mt-5 container-fluid justify-content-center" style="height: auto; padding-top:120px;width:95%;">
        <h1 class="fw-bold ms-4" style="text-align: justify; border-bottom: 2px solid #363636; display: inline-block;">BERITA <span class="text-danger">DESA</span></h1>
        <?php
        include('asset/berita.php')
        ?>
    </div>

    <!-- Footer -->
    <?php
    include("asset/footer.php")
    ?>
</body>


</html>