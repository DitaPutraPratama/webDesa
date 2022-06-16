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

if (isset($_GET['id'])) {
    $id    = $_GET['id'];
} else {
    die("Query Error: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
}

$query     = mysqli_query($koneksi, "SELECT * FROM tbberita WHERE id='$id'");
$result    = mysqli_fetch_array($query);

$tanggal_php = strtotime($result["tanggal"]);
$tanggal = date("d - m - Y", $tanggal_php);
?>

<body>
    <?php include("asset/header.php") ?>
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
                            <a class="nav-link" href="index.php#info">Info Desa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php#berita">Berita</a>
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

    <div class="news" style="width: 80%; margin:0 130px;">
        <div class="container-fluid">
            <img src="img/<?php echo $result['gambar'] ?>" alt="" class="mt-5" width="1056px" height="336px">
            <div class="news" style="text-align: justify;">
                <p class="h2 mt-2 mb-2" style="text-align: justify; border-bottom: 2px solid #363636; display: inline-block;"><?php echo $result['judul'] ?></p>
                <p class="text-muted"><?php echo $tanggal ?> | krandegan, bulukerto</p>
                <p><?php echo $result['isi'] ?></p>

            </div>
        </div>
    </div>
    <div class="footer">
        <?php
        include("asset/footer.php")
        ?>
    </div>

</body>

</html>