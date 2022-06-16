<?php
include "halaman_admin.php";

?>
<div class="content ms-3 me-3">
    <h3>Dashboard Form Edit Berita</h3>
    <div class="container-fluid dashboard">
        <?php
        include "../koneksi.php";
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from tbberita where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form action="proses_edit.php" method="POST">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input class="form-control" type="text" name="id" id="id" value="<?php echo $d['id']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input class="form-control" type="text" name="judul" id="judul" value="<?php echo $d['judul']; ?>">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input class="form-control" type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input class="form-control" type="text" name="isi" id="exampleFormControlTextarea1" value="<?php echo $d['isi']; ?>">
                </div>
                <div class=" form-group">
                    <label for="gambar">Gambar</label>
                    <input class="form-control" type="file" name="gambar" value="<?php echo $d['gambar']; ?>">
                </div>
                <br>
                <input type="submit" name="submit" value="Update Data" class="btn btn-primary">
            </form>
        <?php
        }
        ?>
    </div>
</div>