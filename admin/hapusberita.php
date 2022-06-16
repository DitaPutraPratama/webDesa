<?php
include '../koneksi.php';
$id = $_GET['id'];
$queri = mysqli_query($koneksi, "delete from tbberita where id='$id'");
if ($queri) {
    $pesan = "<div class='alert alert-success  alert-dismissible fade show' role='alert'>
        Berita sudah berhasil di hapus
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    $pesan = urlencode($pesan);
    header("Location: edit.php?pesan={$pesan}");
} else {
    die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
}
