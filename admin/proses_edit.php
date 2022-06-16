<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$isi = $_POST['isi'];
$gambar = $_POST['gambar'];

// update data ke database
mysqli_query($koneksi, "update tbberita set judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi', isi='$isi', gambar='$gambar' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:edit.php");
