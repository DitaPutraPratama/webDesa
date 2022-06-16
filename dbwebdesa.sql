-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2022 pada 02.16
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebdesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbberita`
--

CREATE TABLE `tbberita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbberita`
--

INSERT INTO `tbberita` (`id`, `judul`, `tanggal`, `deskripsi`, `isi`, `gambar`) VALUES
(1, 'PERINGATAN MAULID NABI MUHAMMAD SAW 1443H', '2021-10-18', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis ratione, quibusdam adipisci modi exercitationem quae perferendis quam deleniti animi quod ex, recusandae iure libero velit, esse dolorem obcaecati. Libero, totam.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, unde commodi sapiente placeat odit nobis nulla numquam reiciendis, mollitia, consequuntur quasi aliquam ratione maxime nihil voluptatum magni atque dignissimos repellat?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, amet unde! Quisquam qui voluptates, aspernatur dolorem soluta praesentium, inventore itaque repellendus autem magnam asperiores accusantium nostrum, perspiciatis minus accusamus minima!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, ipsam! Fugiat fuga iure rem eos minima sint tenetur laborum iusto. Incidunt, voluptatum rem reprehenderit quia odit animi fugiat? Dicta, dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo officia, tenetur molestias adipisci corrupti beatae consequatur! Vel illum excepturi facilis quia asperiores magnam delectus possimus molestiae aspernatur nostrum, consectetur unde.', 'news1.png'),
(2, 'KFC CUP 2020 DIBATALKAN', '2021-08-019', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis ratione, quibusdam adipisci modi exercitationem quae perferendis quam deleniti animi quod ex, recusandae iure libero velit, esse dolorem obcaecati. Libero, totam.', 'KFC CUP merupakan event yang sudah berjalan dari tahun 2016. Awalnya event ini merupakan salah satu event untuk memperingati hari kemerdekaasn Indonesia, namun seiring berjalannya waktu event ini menjadi agenda tahunan kelurahan Krandegan. Event yang sudah berjalan setiap tahun harus dibatalkan tahun ini akibat pandemi Covid-19 yang menyebar hampir diseluruh dunia. Akibatnya sekitar 16 tim besar disekitar area Distrik 5 Wonigiri tidak bisa bertanding merebutkan piala KFC CUP yang ke-5.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, unde commodi sapiente placeat odit nobis nulla numquam reiciendis, mollitia, consequuntur quasi aliquam ratione maxime nihil voluptatum magni atque dignissimos repellat?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, amet unde! Quisquam qui voluptates, aspernatur dolorem soluta praesentium, inventore itaque repellendus autem magnam asperiores accusantium nostrum, perspiciatis minus accusamus minima!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, ipsam! Fugiat fuga iure rem eos minima sint tenetur laborum iusto. Incidunt, voluptatum rem reprehenderit quia odit animi fugiat? Dicta, dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo officia, tenetur molestias adipisci corrupti beatae consequatur! Vel illum excepturi facilis quia asperiores magnam delectus possimus molestiae aspernatur nostrum, consectetur unde.', 'news.png'),
(3, 'KERJA BAKTI SETIAP MINGGU DUSUN CEWEK', '2021-01-02','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis ratione, quibusdam adipisci modi exercitationem quae perferendis quam deleniti animi quod ex, recusandae iure libero velit, esse dolorem obcaecati. Libero, totam.','Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, unde commodi sapiente placeat odit nobis nulla numquam reiciendis, mollitia, consequuntur quasi aliquam ratione maxime nihil voluptatum magni atque dignissimos repellat?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, amet unde! Quisquam qui voluptates, aspernatur dolorem soluta praesentium, inventore itaque repellendus autem magnam asperiores accusantium nostrum, perspiciatis minus accusamus minima!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, ipsam! Fugiat fuga iure rem eos minima sint tenetur laborum iusto. Incidunt, voluptatum rem reprehenderit quia odit animi fugiat? Dicta, dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo officia, tenetur molestias adipisci corrupti beatae consequatur! Vel illum excepturi facilis quia asperiores magnam delectus possimus molestiae aspernatur nostrum, consectetur unde.','news2.png');


-- --------------------------------------------------------

--
-- Struktur dari tabel `tblogin`
--

CREATE TABLE `tblogin` (
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(9) NOT NULL,
  `email` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblogin`
--

INSERT INTO `tblogin` (`nik`, `nama`, `password`, `email`, `level`) VALUES
(1, 'adminPemerintah', 'admin', '202020243@mhs.udb.ac', 'admin'),
(2, 'AdminDesa','admin','Krandegan.desa@gmail.com','admin'),
(11111, 'dita', 'user', 'diat@gmail.com', 'user'),
(22222, 'Fitroh','1234','oldboy@gmail.com','user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbperangkatdesa`
--

CREATE TABLE `tbperangkatdesa` (
  `nama` varchar(50) NOT NULL,
  `nik` int(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `periode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbperangkatdesa`
--

INSERT INTO `tbperangkatdesa` (`nama`, `nik`, `nip`, `jabatan`, `alamat`, `foto`, `periode`) VALUES
('Imam Supriadi', 3232, 1908214768, 'Kepala Desa', 'Jangglengan, krandegan', 'kades.png', '2019-2024'),
('Supar Pakubumi', 1112122, 1908065012, 'Sekretaris Desa', 'Ketonggo, Krandegan', 'foto.png', '2019-2024'),
('Dita Putra Pratama', 32322, 19082147686, 'Admin', 'Jangglengan, krandegan', 'admin.jpg', '2019-2024');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbberita`
--
ALTER TABLE `tbberita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tbperangkatdesa`
--
ALTER TABLE `tbperangkatdesa`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbberita`
--
ALTER TABLE `tbberita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
