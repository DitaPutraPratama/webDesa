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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#212529" fill-opacity="1" d="M0,32L26.7,58.7C53.3,85,107,139,160,149.3C213.3,160,267,128,320,128C373.3,128,427,160,480,165.3C533.3,171,587,149,640,160C693.3,171,747,213,800,234.7C853.3,256,907,256,960,218.7C1013.3,181,1067,107,1120,112C1173.3,117,1227,203,1280,202.7C1333.3,203,1387,117,1413,74.7L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
    </svg>
    <div class="container-fluid bg-dark mt-0 ">
        <footer class="py-3 my-4 pb-0 mb-0 mt-0">
            <div class="list-menu-footer border-bottom pb-0 mb-0">
                <ul class="nav justify-content-center ">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Perangkat Desa</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Berita</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li>
                </ul>
                <p class="text-center text-muted"><?php if(isset($_SESSION['nama'])){
                    echo $_SESSION['nama'];
                }elseif(empty($_SESSION['nama']) OR !isset($_SESSION['nama'])){
                    echo "...";
                } ?></p>
            </div>
            <p class="text-center text-muted pt-3 pb-3 mb-0">Web Desa ©Fitroh-Dita 2021 </p>
        </footer>
    </div>
</body>

</html>