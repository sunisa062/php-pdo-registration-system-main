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
                            <li><a class="dropdown-item" href="Ystation">Y station</a>
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
                <p class="cate">Diary Day</p>
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="คลื่น.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            คลื่น
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="บทเพลงขับกล่อม.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            บทเพลงขับกล่อม
                                        </a>
                                    </h5>
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
                                            ฝากถึงเธอผู้เป็นควยไร
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
                </div>
            </div>
            <div class="sone">
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="กล้องบันทึกความทรงจำ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            กล้องบันทึกความทรงจำ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="กาแฟแก้วแรกทุกเช้า.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            กาแฟแก้วแรกทุกเช้า
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ไดอารี่ของคนแอบรัก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ไดอารี่ของคนแอบรัก
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เทียนไข.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เทียนไข
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="น้ำคือชีวิต.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            น้ำคือชีวิต
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ผู้หญิงกับความสวย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ผู้หญิงกับความสวย
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
                                <img src="พิชิตเส้นทาง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            พิชิตเส้นทาง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เพลงที่มีเธอ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เพลงที่มีเธอ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ภาพถ่ายแห่งความทรงจำ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ภาพถ่ายแห่งความทรงจำ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="มุมโปรด.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            มุมโปรด
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เส้นทางมีเพียงฉันคนเดียว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เส้นทางมีเพียงฉันคนเดียว
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เสียงดนตรี.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เสียงดนตรี
                                        </a></h5>
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