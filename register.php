<?php
include "koneksi.php";
if (isset($_POST["submit"])) {

    $nama       = htmlentities(strip_tags(trim($_POST["nama"])));
    $password   = htmlentities(strip_tags(trim($_POST["password"])));
    $nik        = htmlentities(strip_tags(trim($_POST["nik"])));
    $email      = htmlentities(strip_tags(trim($_POST["email"])));

    $pesaneror = "";
    if (empty($nama)) {
        $pesaneror .= "Harap isi Nama anda terlebih dahulu <br>";
    }

    if (empty($password)) {
        $pesaneror .= "Harap isi Password anda terlebih dahulu <br>";
    }
    if (empty($nik)) {
        $pesaneror .= "Harap isi Nik anda terlebih dahulu <br>";
    }

    $nik = mysqli_real_escape_string($koneksi, $nik);
    $query = "SELECT * FROM tblogin WHERE nik='$nik'";
    $hasil_query = mysqli_query($koneksi, $query);
    $jumlah_data = mysqli_num_rows($hasil_query);
    if ($jumlah_data >= 1) {
        $pesaneror .= "Nik yang sama sudah digunakan! <br>";
    }

    if (empty($email)) {
        $pesaneror .= "Harap isi Email anda terlebih dahulu ";
    }
    if ($pesaneror === "") {

        $nik        = mysqli_real_escape_string($koneksi, $nik);
        $nama       = mysqli_real_escape_string($koneksi, $nama);
        $password   = mysqli_real_escape_string($koneksi, $password);
        $email      = mysqli_real_escape_string($koneksi, $email);

        $query = "INSERT INTO tblogin (nik,nama,password, email, level)  VALUES";
        $query .= "('$nik','$nama','$password','$email','user')";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $pesan = "<div class='alert alert-success  alert-dismissible fade show' role='alert'>
                        User dengan nama  \"<b>$nama</b>\" sudah berhasil di tambah
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
            $pesan = urlencode($pesan);
            header("Location: login.php?pesan={$pesan}");
        } else {
            die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
        }
    }
} else {
    $pesaneror = "";
    $nama       = "";
    $nik        = "";
    $password   = "";
    $email      = "";
}
?>
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
    <title>Web Desa</title>
</head>

<body>
    <section>
        <?php
        if ($pesaneror !== "") {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            $pesaneror
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        ?>
        <div class="container-fluid h-custom" style="margin-top: 78px;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-2 me-3 fw-bold">Daftar</p>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-md" placeholder="Masukan Nama Anda" />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="pass">Password</label>
                            <input type="password" id="pass" name="password" class="form-control form-control-md" placeholder="Masukan password" />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="nik">Nomor Induk Kependudukan</label>
                            <input type="text" id="nik" name="nik" class="form-control form-control-md" placeholder="Masukan NIK Anda" />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="email">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control form-control-md" placeholder="Masukan Email Anda" />
                        </div>
                        <input type="submit" name="submit" class="btn btn-outline-primary btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Daftar">

                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary fix-bottom" style="margin-top: 120px;">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Web Desa ©Fitroh-Dita 2021
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>


</body>

</html>