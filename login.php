<?php
session_start();
if (isset($_GET["pesan"])) {
    $pesan = $_GET["pesan"];
}

if (isset($_POST["submit"])) {

    $nama = htmlentities(strip_tags(trim($_POST["nama"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));

    $pesan_error = "";

    if (empty($nama)) {
        $pesan_error .= "nama belum diisi <br>";
    }

    if (empty($password)) {
        $pesan_error .= "Password belum diisi <br>";
    }

    include("koneksi.php");

    $nama = mysqli_real_escape_string($koneksi, $nama);
    $password = mysqli_real_escape_string($koneksi, $password);

    $query = "SELECT * FROM tblogin WHERE nama = '$nama' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($result);
        if ($data['level'] == "admin") {
            $_SESSION['nama'] = $nama;
            $_SESSION['level'] = "admin";
            header("location:admin/tambahberita.php");
        } else if ($data['level'] == "user") {
            $_SESSION['nama'] = $nama;
            $_SESSION['level'] = "user";
            header("location:index.php");
        }
    } else {
        $pesan_error .= "nama dan/atau Password tidak sesuai";
    }
    mysqli_free_result($result);
    mysqli_close($koneksi);
} else {
    $pesan_error = "";
    $nama = "";
    $password = "";
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
    <?php
    if (isset($pesan)) {
        echo "<div class=\"pesan\">$pesan</div>";
    }
    if ($pesan_error !== "") {
        echo
        "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            $pesan_error
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }
    ?>
    <section>
        <div class="container-fluid h-custom" style="margin-top: 100px;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="login.php" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Log-In</p>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-md" placeholder="Masukkan Nama Anda" />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="pass">Password</label>
                            <input type="password" id="pass" name="password" class="form-control form-control-md" placeholder="Enter password" />
                        </div>
                        <input type="submit" name="submit" class="btn btn-outline-primary btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="register.php" class="link-danger">Silahkan Daftar</a></p>
                        </div>

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