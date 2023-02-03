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
</head>
<header>
    <font face="MN KIMCHI NEW">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <h1 class="logo">The Otis</h1>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/INDEX/index.html" style="color: black;">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">หมวดหมู่</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Y%20station/index.html">Y station</a>
                            </li>
                            <li><a class="dropdown-item" href="/Drama/index.html">Drama</a></li>
                            <li><a class="dropdown-item" href="/Diary%20Day/index.html">Diary Day</a></li>
                            <li><a class="dropdown-item" href="/Fantasy/index.html">Fantasy</a>
                            </li>
                            <li><a class="dropdown-item" href="/The Otis/Comedy/Comedy.php">Comedy</a></li>
                            <li><a class="dropdown-item" href="/Lovely/index.html">Lovely</a></li>
                        </ul>
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
                        <a href="/LOGIN/LOGIN.html">
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
        <div class="group">
            <a href="" class="fic">
                <p class="cate1">หมวดหมู่แนะนำ</p>
            </a>
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="รักนี้ยอมถวายสังฆทาน.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="" class="text">
                                        รักนี้ยอมถวายสังฆทาน
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="โปรดอย่าหยุด.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="" class="text">
                                        โปรดอย่าหยุด
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ข้าคือแมวผู้ครองโลก.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ข้าคือแมวผู้ครองโลก
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ความหล่อกับผมที่พลิ้วไสว.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ความหล่อกับผมพลิ้ว
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ตะเอ๋ ไอ้คนบาปหนา.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ตะเอ๋ ไอ้คนบาปหนา
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ผมว่าผมก็น่ารักนะ.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ผมว่าผมก็น่ารักนะ
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/Y%20station/index.html" class="fic">
                <p class="cate">Y station</p>
            </a>
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="รักแรก มักแฟน.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        รักแรก มักแฟน
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ไม้สี มอเสด.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ไม้สี มอเสด
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ไอ้เนิร์ดเด็กสร้าง.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ไอ้เนิร์ดเด็กสร้าง
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="กลิ่นเธอเหมื่อนหญ้าเปียก.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        กลิ่นเหมือนหญ้าเปียก
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ผู้สร้างสรรค์ชั้นเอก.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ผู้สร้างสรรค์ชั้นเอก
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ไอ้ต้าวหมาเงย.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ไอ้ต้าวหมาเงย
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/Diary%20Day/index.html" class="fic">
                <p class="cate">Diary Day</p>
            </a>
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="บทเพลงขับกล่อม.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        บทเพลงขับกล่อม
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ฝากเพลงช่วยบรรเลง.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ฝากเพลงช่วยบรรเลง
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="หวัดดีเองกลี.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        หวัดดีเองกลี
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ฝากถึงเธอผู้เป็นควยไรไอ้สัส.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ถึงเธอผู้เป็นควยไรไอ้สัส
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="ฝากเพลง.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        ฝากเพลง
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="pho">
                            <img src="คลื่น.jpeg" class="card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" class="text">
                                        คลื่น
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <p>
        Copyright@2023
    </p>
</footer>
</html>