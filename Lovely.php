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
                <p class="cate">Lovely</p>
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ขนุนหยุด.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            ขนุนหยุด
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="จุ้บหิว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            จุ้บหิว
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="นักเลงคีย์ใจ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            นักเลงคีย์ใจ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="คริสต์มาสนี้ เราสองคน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            คริสต์มาสนี้ เราสองคน
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ใจผูกใจ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ใจผูกใจ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="บทเพลงแห่งแมว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            บทเพลงแห่งแมว
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
                                <img src="มองหน้าหาเรื่องหรือหาแฟนวะ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            มองหน้าหาเรื่องหรือหาแฟนวะ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="มีคนจองแล้ว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            มีคนจองแล้ว
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รักนี้ถวายให้แมว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักนี้ถวายให้แมว
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="My everything.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            My everything
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="คุกกี้สื่อรัก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            คุกกี้สื่อรัก
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="จดหมายรัก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            จดหมายรัก
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
                                <img src="ตราบฟ้าดินสลาย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ตราบฟ้าดินสลาย
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ทุกเช้าที่มีกันและกัน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ทุกเช้าที่มีกันและกัน
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="บทเพลงแห่งแมว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            บทเพลงแห่งแมว
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="บทเพลงแห่งรัก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            บทเพลงแห่งรัก
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เพลงเพื่อเรา.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เพลงเพื่อเรา
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รักข้ามภพ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักข้ามภพ
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
                                <img src="รักทางไกล.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักทางไกล
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="วันวาเลนไทน์.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            วันวาเลนไทน์
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="วิวาห์สมหวัง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            วิวาห์สมหวัง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="เส้นทางแห่งรัก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เส้นทางแห่งรัก
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