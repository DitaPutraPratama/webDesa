<!DOCTYPE html>
<html lang="en">

<head>
</head>
<?php
// session_start();
// if ($_SESSION['level'] == "") {
//     header("location:index.php?pesan=gagal");
// }
include "koneksi.php";

$query  = "SELECT * FROM tbperangkatdesa";
$result = mysqli_query($koneksi, $query);



?>

<body>
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $data = mysqli_fetch_assoc($result);
                $no = 1;
                foreach ($result as $key => $data) {
                    echo $b = $no++
                ?>
                    <div class="carousel-item <?= ($b == 1) ? 'active' : "" ?>" data-bs-interval="10000">
                        <div class="card" style="max-width: 650px; height:273px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/<?php echo $data['foto'] ?>" width="202px" height="270px" class="rounded-start" alt="perangkat desa
                                    ">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body ms-2">
                                        <h6 class="card-title text-danger">NAMA :</h6>
                                        <p class="card-text"><?php echo $data['nama'] ?></p>
                                        <h6 class="card-title text-danger">JABATAN :</h6>
                                        <p class="card-text"><?php echo $data['jabatan'] ?></p>
                                        <h6 class="card-title text-danger">ALAMAT :</h6>
                                        <p class="card-text"><?php echo $data['alamat'] ?></p>

                                        <a href="desc-perangkat-desa.php?nik=<?= $data['nik'] ?>" class="btn btn-outline-primary btn-sm" style="text-decoration: none;">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $b++;
                } ?>
            </div>
        </div>
    </div>

</body>

</html>