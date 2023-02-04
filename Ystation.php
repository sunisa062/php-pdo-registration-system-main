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
    <link href="css/stylecom.css" rel="stylesheet">
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
                        <a class="nav-link " aria-current="page" href="user.php" style="color: black;">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">หมวดหมู่</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Ystation.php">Y station</a>
                            </li>
                            <li><a class="dropdown-item" href="drama.php">Drama</a></li>
                            <li><a class="dropdown-item" href="diary.php">Diary Day</a></li>
                            <li><a class="dropdown-item" href="fantasy.php">Fantasy</a>
                            </li>
                            <li><a class="dropdown-item" href="Comedy.php">Comedy</a></li>
                            <li><a class="dropdown-item" href="Lovely.php">Lovely</a></li>
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
        <div class="group">
            <div class="sone">
                <p class="cate">Y station</p>
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="กลิ่นเธอเหมื่อนหญ้าเปียก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            กลิ่นเหมือนหญ้าเปียก
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="คลาสสิคยาใจ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            คลาสสิคยาใจ
                                        </a>
                                    </h5>
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
                                <img src="ไอ้ต้าวหมาเงย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ไอ้ต้าวหมาเงย
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
                </div>
            </div>
            <div class="sone">
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เกิดมาเพื่อรัก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เกิดมาเพื่อรัก
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="จุมพิต.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            จุมพิต
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ทาสแมว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ทาสแมว
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="นายแพทย์สุดหล่อกับนักบาสสุดlove.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            นายแพทย์สุดหล่อกับนักบาสสุดlove
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="บอสผมโหด.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            บอสผมโหด
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
            </div>
            <div class="sone">
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="แฟนผมน่ารักที่สุด.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            แฟนผมน่ารักที่สุด
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="แฟนผมเป็นผู้ชาย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            แฟนผมเป็นผู้ชาย
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ภารกิจพิชิตใจคุณ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ภารกิจพิชิตใจคุณ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รถไฟมาหานะเธอ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รถไฟมาหานะเธอ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รักที่ผิด.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักที่ผิด
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รักแรกไอ้นายตัวร้าย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักแรกไอ้นายตัวร้าย
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sone">
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รักแห่งสยาม.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักแห่งสยาม
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เล่นของสูง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เล่นของสูง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="โลกที่ใจร้าย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            โลกที่ใจร้าย
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="แอบรักพี่รหัสตัวเอง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            แอบรักพี่รหัสตัวเอง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ไอ้ต้าวใหญ่กับไอ้ต้าวเล็ก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ไอ้ต้าวใหญ่กับไอ้ต้าวเล็ก
                                        </a>
                                    </h5>
                                </div>
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