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
                <p class="cate">Comedy</p>
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ความหล่อกับผมที่พลิ้วไสว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="" class="text">
                                            ความหล่อกับผมพลิ้ว
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
                                <img src="จุ้ยอย่าแซ่บ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            จุ้ยอย่าแซ่บ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="นรกก็แค่ชื่อน้ำพริก.jpg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            นรกก็แค่ชื่อน้ำพริก
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
                                <img src="ฟิตเนส ฟิตใจ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ฟิตเนส ฟิตใจ
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
                                <img src="ผมว่าผมก็น่ารักนะ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ผมว่าผมก็น่ารักนะ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="หนอนทะเลทรายผู้เศร้าหมอง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            หนอนทะเลผู้เศร้าหมอง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="หยุดนะ อีกกาเทย.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            หยุดนะ อีกกาเทย
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="หวัดดีนายปลาไหล.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            หวัดดีนายปลาไหล
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="หล่อลาก กระซวกใจน้อง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            หล่อกระซวกใจน้อง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="รักนี้ยอมถวายสังฆทาน.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            รักนี้ยอมถวายสังฆทาน
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
                                <img src="เหม่งแตกเพราะแดกเยอะ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เหม่งแตกเพราะแดก
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="กินเรามั้ยมนุษย์.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            กินเรามั้ยมนุษย์
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ใจเกเร.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ใจเกเร
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="จุ๊บเหม่งมีอะไร.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            จุ๊บเหม่งมีอะไร
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ผีน้อยน่ารัก.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ผีน้อยน่ารัก
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="อย่าชี้หน้านะนุ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            อย่าชี้หน้านะนุด
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
                                <img src="เหม็นแบ็ว.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            เหม็นแบ็ว
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="โอ้โง่ กูหลอกมึง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ไอ้โง่ กูหลอกมึง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ไหปานถูกทิ้ง.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ไหปานถูกทิ้ง
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="อย่ากร่างถ้ายังไม่หย่านม.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            อย่าถ้ายังไม่หย่านม
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="จือปากปะ.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            จือปากปะ
                                        </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="pho">
                                <img src="ปล่อยเราไปเถอะมนุษย์.jpeg" class="card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="" class="text">
                                            ปล่อยเราไปเถอะมนุษย์
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