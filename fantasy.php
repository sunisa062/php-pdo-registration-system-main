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
                <p class="cate">Fantasy</p>
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="คืนจันทร์.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            คืนจันทร์
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ครอบครัวผีบ้า.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            ครอบครัวผีบ้า
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ผีก็รักเป็น.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ผีก็รักเป็น
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="หอศักดิ์สิทธิ์.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            หอศักดิ์สิทธิ์
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="คืนวันวาน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            คืนวันวาน
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ขับปอร์เช่แล้วมันฟิน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ขับปอร์เช่แล้วมันฟิน
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
                                <img src="ขาหมาน่องลาย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ขาหมาน่องลาย
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ห๊าาาาาาาาาโลกแตกหรอ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ห๊าาาาาโลกแตกหรอ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เค้กวันเกิดที่สวยที่สุด.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เค้กวันเกิดที่สวยที่สุด
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เงินเท่านั้นที่ knock everything.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เงิน knock everything
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ฉันคือแมวอ้วน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ฉันคือแมวอ้วน
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ฉันเป็นผีเร่ร่อน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ฉันเป็นผีเร่ร่อน
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
                                <img src="ดาวเต้นมอต้น.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ดาวเต้นมอต้น
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="แตงโมข้าใครอย่าแตะ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            แตงโมข้าใครอย่าแตะ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ทักคนผิดชีวิตเปลียน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ทักคนผิดชีวิตเปลียน
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="นุดเราอยากอาบน้ำ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            นุดเราอยากอาบน้ำ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ผีก็รักเป็น.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ผีก็รักเป็น
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รักข้ามสายพันธุ์.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักข้ามสายพันธุ์
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
                                <img src="ราชาสมุนไพร.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ราชาสมุนไพร
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="สถานบันเทิงผี.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            สถานบันเทิงผี
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="หรือเธอเห็นฉันนั้นเป็นตุ๊กตาบาบี้.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            หรือเธอเห็นฉันนั้นเป็น
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