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
include "koneksi.php";

$query  = "SELECT * FROM tbberita ORDER BY tanggal DESC";
$result = mysqli_query($koneksi, $query);
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                $tanggal_php = strtotime($data["tanggal"]);
                $tanggal = date("d - m - Y", $tanggal_php);
            ?>
                <div class="col-6">
                    <div class="berita mt-3 ">
                        <div class="card mb-3 shadow p-2 m-1 bg-light rounded" style="max-width: 590px;">
                            <img src="img/<?php echo $data['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body" style="text-align: justify; border-bottom: 2px solid #363636; display: inline-block;">
                                <h5 class="card-title"><?php echo $data['judul'] ?></h4>
                                    <p class="card-text" style="font-size: 10px;"><small class="text-muted"><?php echo $tanggal ?></small></p>
                                    <p class="card-text"><?php echo $data['deskripsi'] ?></p>
                                    <form action="news.php" method="get">
                                        <div class="d-grid gap-2 d-sm-flex">
                                            <button type="button" class="btn btn-primary btn-md px-4 gap-3"><a class="text-light" href="news.php?id=<?= $data['id'] ?>" style="text-decoration: none;">Baca Selengkapnya</a> </button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


    </div>

</body>

</html>