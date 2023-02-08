<?php

session_start();
require_once 'config/db.php';

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM episode  WHERE  id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "<script>alert('Data has been deleted successfully');</script>";
        $_SESSION['success'] = "Data has been deleted successfully";
        header("refresh:1; url=ad-add.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="text-align: center;">
    <!--สร้างระบบเพิ่มข้อมูล (file) insert.php-->

    <!--ส่วนของหน้าแรก-->
    <div class="container mt-5">
        <h1>Edit</h1>
        <hr>
        <form action="ad-addinsert.php" method="post" enctype="multipart/form-data"><!--มีการเพิ่มรูปภาพ จึงต้องมี enctype="multipart/form-data" เพื่อให้ insert ได้-->
            <!--ส่วนของการรับข้อมูล-->

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $stmt = $conn->query("SELECT * FROM episode WHERE id = $id");
                $stmt->execute();
                $data = $stmt->fetch(); /* แสดงข้อมูลตัวเก่าได้ */
            }
            ?>
            <div class="mb-3">
                <label for="img" class="col-form-label">Image:</label>
                <input type="file" required class="form-control" id="imgInput" name="img">
                <img src="photo/<?= $data['img']; ?>" width="100%" id="previewImg" alt="">
            </div>
            <div class="mb-3">
                <label for="chapter" class="col-form-label">chapter:</label>
                <input type="text" value="<?= $data['chapter']; ?>" required class="form-control" name="chapter"> <!--required จะแจ้งเตือน หากไม่มีการใส่ข้อมูล-->
            </div>
            <div class="mb-3">
                <label for="content" class="col-form-label">content:</label>
                <textarea rows="100" value="<?= $data['content']; ?>" cols="50" type="text" required class="form-control" name="content"></textarea> <!--required จะแจ้งเตือน หากไม่มีการใส่ข้อมูล-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">ปิด</button>
                <button type="submit" name="submit" class="btn btn-outline-success">บันทึก</button>
            </div>
        </form>
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
    <a class="btn btn-outline-secondary" href="admin.php">Go back</a>
</body>

</html>