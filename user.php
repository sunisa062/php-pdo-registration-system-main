<?php

session_start();
require_once 'config/db.php';
if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: signin.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="styleuser.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

    </style>
</head>
<header>
    <font face="MN KIMCHI NEW">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <h1 class="logo">The Otis</h1>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="user.php" style="color: black;">Home</a>
                    </li>
                </ul>
                <div class="container">
                    <?php
                    if (isset($_SESSION['user_login'])) {
                        $user_id = $_SESSION['user_login'];
                        $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    }
                    ?>
                    <h4 class="mt-6 "><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h4>
                    <a href="logout.php" class="btn btn-outline-light">
                        <p class="text">Logout</p>
                    </a>
                </div>
            </div>
        </nav>
</header>

<body>
    <div class="index">
        <div class="slide">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="">
                            <img src="img/จุ้ยอย่าแซ่บ.jpeg" class="d-block " alt="">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="img/ฟิตเนส ฟิตใจ.jpeg" class="d-block " alt="...">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="img/หยุดนะ อีกกาเทย.jpeg" class="d-block " alt="...">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div>
            <center>
                <p align="justify:50" style="margin-top: 90px;">
                    <hr width="10%" size="3">
                </p>
                <p class="cate">นิยาย</p>
                <p align="justify:40" style="margin-top: -50px;">
                    <hr width="10%" size="3">
                </p>
        </div>
    </div>
    <!--ส่วนนิยายที่เข้ามา-->
    <center>
        <?php
        $stmt = $conn->query("SELECT * FROM chap");
        $stmt->execute();
        $chap = $stmt->fetchAll();

        if (!$chap) {
            echo "<p><td colspan='1' class='text-center'>ไม่พบตอน</td></p>";
        } else {
            foreach ($chap as $chap) {
        ?>
    </center>
    <div class="box" style="background-color: rgb(0, 0, 0); width">
        <div class="boxcol" style="background-color: green;">
            <div class="card">
                <div class="col">
                    <td width="100px"><img class="rounded" width="100%" src="up/<?php echo $chap['img']; ?>" alt=""></td>
                </div>
                <p class="title"><?php echo $chap['title']; ?>
                    <a href=""></a>
                </p>
            </div>
        </div>
    </div>
<?php }
        } ?>
</body>
<footer class="footer">
    <p>
        Copyright@2023
    </p>
</footer>

</html>