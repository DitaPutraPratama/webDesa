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

<body>
    <?php
    include('asset/header.php');
    include('koneksi.php');
    session_start();
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#info">Info Desa</a>
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

    <div class="container-fluid" style="width: 80%; margin:0 130px;">
        <div class="sejarah">
            <img src="img/sejarah.png" alt="" class=" mt-5" width="100%">
            <div class="news" style="text-align: justify;">
                <p class="h2 mt-2 mb-2" style="text-align: justify; border-bottom: 2px solid #363636; display: inline-block;">SEJARAH DESA KRANDEGAN</p>
                <p class="text-muted text-sm"> 01-01-1999 | Krandegan, Bulukerto</p>
                <p>Seingat para Pinisepuh, bahwa pada masa-masa penjajah dulu dan Pemerintahan masih dipegang oleh Kraton, Kepala Desa Krandegan dijalankan oleh bapak Karyo Suwignyo, beliau menjalankan tugas sampai tahun 1952. Mulai tahun 1953 Kepala Desa Krandegan dijabat oleh bapak S. Tjitro Suwignyo, beliau berdomosili di Dusun Pulerejo, dan Balai Desa Krandegan juga terletak berdampingan dengan rumah beliau. Walau Masyarakat Desa Krandegan yang Balai Desanya terletak di ujung selatan, namun tidak mengurangi kelancaran Pemerintahan dalam hal melayani masyarakat berjalan dengan baik dan lancar sampai dengan berakhirnya jabatan pada tahun 1986.</p>
                <p>Kemudian tahun 1987 diadakan pemilihan Kepala Desa, Desa Krandegan. Yang terpilih atau yang menjabat Kepala Desa Krandegan adalah Bp.Soepiyono, Hs. Beliau berupaya keras untuk memindah Balai Desa yang mula-mula diujung selatan, kemudian atas hasil musyawarah dari semua lembaga dan tokoh masyarakat akhirnya berhasil dipindah ditengah-tengah Desa yang letaknya sangat strategis yaitu dilingkungan Desa Krandegan.Pemerintahan yang dijabat Bp. Soepiyono, Hs. berakhir pada tahun 1996.</p>
                <p>Tahun 1996 diadakan pemilihan lagi kemudian yang berhasil untuk menjalankan tugas sebagai Kepala Desa Krandegan adalah Bp. AS. Handoko, didalam pemerintahannya dia mengutamakan pengerasan jalan yang berhasil sebagian jalan diaspal dan dirabat. Pada tahun 2006 berakhir pula masa jabatanya.</p>
                <p>Awal tahun 2007 terjadi pemilihan Kepala Desa kembali, dari hasil pemilihan pada saat itu yang dipercaya untuk menjalankan tugas sebagai Kepala Desa Krandegan adalah saudara Purwanto yang dulunya sebagai mitra kerja dari Pemerintahan Desa yaitu Ketua BPD ( Badan Perwakilan Desa ) yang saat ini berubah menjadi ( Badan Permusyawaratan Desa ). Kemudian pada awal menjabat beliau mempunyai program Pernikahan Massal dengan jumlah 12 ( dua belas ) pasangan pengantin. Tujuan Pernikahan Massal tersebut membantu masyarakat, karena ada yang tidak mampu membiayai pernikahannya, dan agar hubungan bisa syah di jalan Agama dan Pemerintah. Setelah itu prasarana perkantoran dibangun supaya dalam pelayanan masyarakat bisa terlayani dengan baik dan lancar.</p>
                <p>Kemudian Tahun 2008 Balai Desa Krandegan sudah tidak layak di pakai dan mulai saat itu pula dibangun menjadi gedung serbaguna dengan ukuran 8m X 18m yang dananya dari APBD Kabupaten.</p>
                <p>Didalam mengemban amanah menjalankan tugas sebagai Kepala Desa, mudah-mudahan bisa menjalankan program-program yang sesuai dengan misi dan visi semenjak akan mencalonkan Kepala Desa. Atas do’a restu dan dorongan maupun bantuan dari masyarakat ini akan bisa terlaksana dengan baik</p>
                <p>Wilayah Binaan Desa Krandegan terdiri dari 4 (empat ) Dusun, 9 ( Sembilan ) RW, dan 27 ( dua puluh tujuh ) RT. Pemerintahan saat ini berjalan dengan baik dan berupaya supaya ada perubahan yang lebih baik dalam menjalankan tugas. Beliau Bp. Purwanto berakhir masa jabatannya pada bulan Nopember tahun 2012.</p>
                <p>Pada bulan Nopember 2012 Desa Krandegan mengadakan penjaringan atas bakal calon Kepala Desa, karena pada saat itu Desa Krandegan terjadi kekosongan Kepala Desa, sehingga diumumkan kepada semua lapisan masyarakat. Kendati demikian hanya satu bakal calon tunggal, yaitu Bp. Purwanto yang tadinya telah menjabat tahun sebelumnya.</p>
            </div>
        </div>
    </div>
    <?php
    include("asset/footer.php")
    ?>
</body>

</html>