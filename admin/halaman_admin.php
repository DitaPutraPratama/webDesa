<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <script src="../js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/e19e76c095.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div class="topbar">
        <div class="menu">
            <ul>
                <li>
                    <p class="hyadmin"> HI, <?php echo $_SESSION['nama']; ?></p>
                </li>
                <li>
                    <a href="logoutadmin.php">Log Out</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar ">
        <div class="logo">
            <p style="font-size: 24px; font-weight: bold; margin-bottom: 0;">Admin Page</p>
        </div>
        <div class="sidebar-items">
            <ul>
                <p class="menu">Navigation</p>
                <li>
                    <a href="../index.php" class="">
                        <i class="las la-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="tambahberita.php" class="">
                        <i class="las la-plus"></i>
                        <span>Tambah Berita</span>
                    </a>
                </li>
                <li>
                    <a href="edit.php" class="">
                        <i class="las la-book"></i>
                        <span>Daftar Berita</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>