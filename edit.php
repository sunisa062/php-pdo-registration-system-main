<!--เชื่อมต่อกับฐานข้อมูล-->
<?php
/*มีการเก็บ session*/
session_start();
require_once "config/db.php"; /*เข้าไปเอาไฟล์db*/
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $img = $_FILES['img'];
    $chap = $_POST['chapter'];
    $title = $_POST['title'];

    $img2 = $_POST['img2'];
    $upload = $_FILES['img']['name'];

    if ($upload != '') {
        $allow = array('jpg', 'jpeg', 'png');/*ชนิดรูปที่อัปได้*/
        $extension = explode(".", $img['name']);/*แยกนามสกุลไฟล์กับชื่อไฟล์*/
        $fileActExt = strtolower(end($extension));/*แปลงนามสกุลไฟล์ให้เป็นพิมเล็ก*/
        $fileNew = rand() . "." . $fileActExt;
        $filePath = "up/" . $fileNew;/*อัปโหลดไปที่โฟลเดอร์อัป*/

        /*เช็คนามสกุลไฟล์ และส่งallowมาเช็คว่าตรงไหม ก่อนอัป*/
        if (in_array($fileActExt, $allow)) {
            if ($img['size'] > 0 && $img['error'] == 0) { /*เช็คขนาด*/
                move_uploaded_file($img['tmp_name'], $filePath);
            }
        }
    } else {
        $fileNew = $img2;
    }

    $sql = $conn->prepare("UPDATE chap SET img = :img, chapter = :chapter, title = :title WHERE id = :id");
    $sql->bindParam(":id", $id);
    $sql->bindParam(":img", $fileNew);
    $sql->bindParam(":chapter", $chap);
    $sql->bindParam(":title", $title);
    $sql->execute();

    if ($sql) {
        $_SESSION['success'] = "Data has been update succesfully";
        header("location: index.php");
    } else {
        $_SESSION['error'] = "Data has not been update succesfully";
        header("location: index.php");
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <!--css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            max-width: 550px;
        }
    </style>
</head>

<body>
    <!--สร้างระบบเพิ่มข้อมูล (file) insert.php-->

    <!--ส่วนของหน้าแรก-->
    <div class="container mt-5">
        <h1>Edit</h1>
        <hr>
        <form action="edit.php" method="post" enctype="multipart/form-data"><!--มีการเพิ่มรูปภาพ จึงต้องมี enctype="multipart/form-data" เพื่อให้ insert ได้-->
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $stmt = $conn->query("SELECT * FROM chap WHERE id = $id");
                $stmt->execute();
                $data = $stmt->fetch(); /* แสดงข้อมูลตัวเก่าได้ */
            }
            ?>
            <!--ส่วนของการรับข้อมูล เป็น popup-->
            <div class="mb-3">
                <label for="id" class="col-form-label">ID:</label>
                <input type="text" readonly value="<?php echo $data['id']; ?>" required class="form-control" name="id">
                <label for="img" class="col-form-label">Image:</label>
                <input type="file" class="form-control" id="imgInput" name="img">
                <img src="up/<?= $data['img']; ?>" width="100%" id="previewImg" alt="">
                <input type="hidden" value="<?php echo $data['img']; ?>" required class="form-control" name="img2">
            </div>
            <div class="mb-3">
                <label for="chapter" class="col-form-label">chapter:</label>
                <input type="text" value="<?= $data['chapter']; ?>" required class="form-control" name="chapter">
            </div>
            <div class="mb-3">
                <label for="title" class="col-form-label">title:</label>
                <input type="text" value="<?= $data['title']; ?>" required class="form-control" name="title"> <!--required จะแจ้งเตือน หากไม่มีการใส่ข้อมูล-->
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="index.php">Go back</a>
                <button type="submit" name="update" class="btn btn-success">update</button>
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

</body>

</html>