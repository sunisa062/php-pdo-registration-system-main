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
    <link href="css/styleuser.css" rel="stylesheet">
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
    <!--สร้างModel      id อันนี้ต้องเปลี่ยนให้ตรงกับ ตัว target-->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่ม</h5><!--ส่วนของเฮด popup-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--ส่วนของเฮด-->
                <div class="modal-body"><!--เป็นฟอร์มที่เอาไว้ insert ข้อมูล ไป index-->
                    <form action="insert.php" method="post" enctype="multipart/form-data"><!--มีการเพิ่มรูปภาพ จึงต้องมี enctype="multipart/form-data" เพื่อให้ insert ได้-->
                        <!--ส่วนของการรับข้อมูล เป็น popup-->
                        <div class="mb-3">
                            <label for="img" class="col-form-label">Image:</label>
                            <input type="file" required class="form-control" id="imgInput" name="img">
                            <img loading="lazy" width="100%" id="previewImg" alt="">
                        </div>
                        <div class="group">
                            <p class="cate1"></p>
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
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table">
        <?php
        $stmt = $conn->query("SELECT * FROM chap");
        $stmt->execute();
        $chap = $stmt->fetchAll();

        if (!$chap) {
            echo "<p><td colspan='10' class='text-center'>ไม่พบตอน</td></p>";
        } else {
            foreach ($chap as $chap) {
        ?>
                <tr>
                    <td width="50px"><img class="rounded" width="100%" src="up/<?php echo $chap['img']; ?>" alt=""></td>
                </tr>
        <?php }
        } ?>
        </tbody>
    </table>
</body>
<footer class="footer">
    <p>
        Copyright@2023
    </p>
</footer>

</html>