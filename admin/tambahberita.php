<?php
include "halaman_admin.php";
?>
<div class="content ms-3 me-3">
    <h3>Dashboard Tambah Berita</h3>
    <div class="container-fluid dashboard">
        <?php
        include "../koneksi.php";
        if (isset($_POST["submit"])) {
            $judul      = htmlentities(strip_tags(trim($_POST["judul"])));
            $tanggal    = htmlentities(strip_tags(trim($_POST["tanggal"])));
            $deskripsi  = htmlentities(strip_tags(trim($_POST["deskripsi"])));
            $isi        = htmlentities(strip_tags(trim($_POST["isi"])));
            $gambar     = htmlentities(strip_tags(trim($_POST["gambar"])));

            $pesan_error = "";

            if (empty($judul)) {
                $pesan_error .= "Judul belum diisi <br>";
            }

            if (empty($tanggal)) {
                $pesan_error .= "Tanggal belum diisi <br>";
            }
            if (empty($deskripsi)) {
                $pesan_error .= "Deskripsi belum diisi <br>";
            }
            if (empty($isi)) {
                $pesan_error .= "Isi berita belum diisi <br>";
            }
            if (empty($gambar)) {
                $pesan_error .= "Gambar belum dipilih<br>";
            }
            if ($pesan_error === "") {

                $judul      = mysqli_real_escape_string($koneksi, $judul);
                $tanggal    = mysqli_real_escape_string($koneksi, $tanggal);
                $deskripsi  = mysqli_real_escape_string($koneksi, $deskripsi);
                $isi        = mysqli_real_escape_string($koneksi, $isi);
                $gambar     = mysqli_real_escape_string($koneksi, $gambar);

                $query  = "INSERT INTO tbberita VALUES";
                $query .= "('','$judul','$tanggal','$deskripsi','$isi','$gambar')";
                $result = mysqli_query($koneksi, $query);

                if ($result) {
                    $pesan = "<div class='alert alert-success  alert-dismissible fade show' role='alert'>
                        Berita dengan judul  \"<b>$judul</b>\" sudah berhasil di tambah
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    $pesan = urlencode($pesan);
                    header("Location: edit.php?pesan={$pesan}");
                } else {
                    die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
                }
            }
        } else {
            $pesan_error = "";
            $id        = "";
            $judul     = "";
            $tanggal   = "";
            $deskripsi = "";
            $isi       = "";
            $gambar    = "";
        }
        ?>
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
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Judul</label>
                <input class="form-control" type="text" name="judul">
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input class="form-control" type="date" name="tanggal">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi">
            </div>
            <div class="form-group">
                <label for="">Isi</label>
                <textarea class="form-control" type="text" name="isi" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">Gambar</label>
                <input class="form-control" type="file" name="gambar">
            </div>
            <br>
            <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
            <input type="reset" name="reset" value="Reset" class="btn btn-danger">
        </form>
    </div>
</div>