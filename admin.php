<?php

session_start();
require_once 'config/db.php';
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: signin.php');
}



if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM chap  WHERE  id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "<script>alert('Data has been deleted successfully');</script>";
        $_SESSION['success'] = "Data has been deleted successfully";
        header("refresh:1; url=admin.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="text-align: center;">
    <div class="container">
        <?php

        if (isset($_SESSION['admin_login'])) {
            $admin_id = $_SESSION['admin_login'];
            $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        ?>
        <h3 class="mt-4">Welcome Admin, <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h3>
        <a href="logout.php" class="btn btn-outline-danger" style="float: right;">Logout</a>
    </div>


    <!--สร้างModel      id อันนี้ต้องเปลี่ยนให้ตรงกับ ตัว target-->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มนิยาย</h5><!--ส่วนของเฮด popup-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--ส่วนของเฮด-->
                <div class="modal-body"><!--เป็นฟอร์มที่เอาไว้ insert ข้อมูล ไป index-->
                    <form action="ad-insert.php" method="post" enctype="multipart/form-data"><!--มีการเพิ่มรูปภาพ จึงต้องมี enctype="multipart/form-data" เพื่อให้ insert ได้-->
                        <!--ส่วนของการรับข้อมูล เป็น popup-->
                        <div class="mb-3">
                            <label for="img" class="col-form-label">Image:</label>
                            <input type="file" required class="form-control" id="imgInput" name="img">
                            <img loading="lazy" width="100%" id="previewImg" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="col-form-label">title:</label>
                            <input type="text" required class="form-control" name="title"> <!--required จะแจ้งเตือน หากไม่มีการใส่ข้อมูล-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">ปิด</button>
                            <button type="submit" name="submit" class="btn btn-outline-success">บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--สร้างระบบเพิ่มข้อมูล (file) insert.php-->

    <!--ส่วนของหน้าแรก-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 style="float: left;">นิยาย</h1>
            </div> <!--col-md-6-->
            <div class="col-md-6-flex justify-content-end">
                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#userModal" data-bs-whatever="@mdo">เพิ่มนิยาย</button>
            </div> <!--col-md-6-flex justify-content-end-->
        </div> <!--row-->
        <hr>
        <!--เช็คว่า session successไหม-->
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']); /*session จะได้ไม่ค้าง*/
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>
        
        <!--loopข้อมูล-->
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Img</th>
                    <th scope="col">title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

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
                            <th scope="row"><?php echo $chap['id']; ?></th>
                            <td width="100px"><img class="rounded" width="100%" src="up/<?php echo $chap['img']; ?>" alt=""></td>
                            <td><?php echo $chap['title']; ?></td>
                            <td>
                                <a href="ad-edit.php?id=<?php echo $chap['id']; ?>" class="btn btn-outline-secondary">แก้ไขนิยาย</a>
                                <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $chap['id']; ?>" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>

    </div><!--container mt-5-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--พรีวิวรูปภาพก่อนอัปโหลด-->
    <script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.file;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
    </script>
</body>

</html>