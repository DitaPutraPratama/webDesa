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

if (isset($_GET['nik'])) {
    $nik    = $_GET['nik'];
} else {
    die("Query Error: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
}


?>

<body>
    <?php
    include('asset/header.php')
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
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php#info">Info Desa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#berita">Berita</a>
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

    <?php
    $query     = mysqli_query($koneksi, "SELECT * FROM tbperangkatdesa WHERE nik='$nik'");
    $result    = mysqli_fetch_array($query);


    ?>

    <div class="card text-center mt-3">
        <div class="card-header fw-bold">
            <?php echo $result['jabatan'] ?>
        </div>
        <div class="card-body">
            <img src="img/<?php echo $result['foto'] ?>" alt="" class="rounded border border-dark" width="205px" height="270px">
            <p class="card-title m-1 text-danger">Nama</p>
            <p class="card-title m-1"><?php echo $result['nama'] ?></p>
            <p class="card-text m-1 text-danger">Nomor Induk Pegawai</p>
            <p class="card-text m-1"><?php echo $result['nip'] ?></p>
            <p class="card-text m-1 text-danger">Alamat</p>
            <p class="card-text m-1"><?php echo $result['alamat'] ?></p>
        </div>
        <div class="card-footer text-muted">
            <?php echo $result['periode'] ?>
        </div>
    </div>

    <?php
    include('asset/footer.php')
    ?>
</body>

</html>