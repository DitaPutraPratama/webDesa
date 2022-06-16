<?php
include "halaman_admin.php";
?>
<div class="content ms-3 me-3">
    <h3>Dashboard Daftar Berita</h3>
    <?php
    $pesan_error = "";
    if (isset($_GET["pesan"])) {
        $pesan = $_GET["pesan"];
    }
    if (isset($pesan)) {
        echo "<div class=\"pesan\">$pesan</div>";
    }
    ?>
    <div class="container-fluid dashboard">
        <table class="table">
            <thead>
                <tr>
                    <th width="650px" scope="col">Judul</th>
                    <th width="80px" scope="col">Tanggal</th>
                    <th width="100px" scope="col">Gambar</th>
                    <th width="auto" scope="col">Fitur</th>
                </tr>
            </thead>
            <?php
            include "../koneksi.php";
            $data = mysqli_query($koneksi, "select * from tbberita");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo $d['gambar']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="form_edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a class="btn btn-danger" href="hapusberita.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>