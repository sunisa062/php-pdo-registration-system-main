<!--เชื่อมต่อกับฐานข้อมูล-->
<?php
/*มีการเก็บ session*/
session_start();
require_once "config/db.php"; /*เข้าไปเอาไฟล์db*/

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM chap  WHERE  id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "<script>alert('Data has been deleted successfully');</script>";
        $_SESSION['success'] = "Data has been deleted successfully";
        header("refresh:1; url=index.php");
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
    <link href="css/stylepage.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            </div>
        </nav>
</header>

<body>
    <div class="view">
        <div class="top" style="background-color: black; width: auto ;height: 400px;">
            <div class="boxtop" style="background-color: rgba(255, 255, 255, 0.656); width: 1000px;">
                <div class="subbox" style="background-color: rgb(0, 0, 0);">
                    <div class="box">
                        <div class="text">
                            <h1 class="name">
                                เหม่งแตกเพราะแดกเยอะ
                            </h1>
                        </div>
                        <div class="text">
                            <h1 class="cate">
                                Comedy
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="intro">
                    <h1>
                        บทนำ
                    </h1>
                    <p class="textintro">
                        intro
                    </p>
                </div>
            </div>
        </div>
        <!--สร้างModel      id อันนี้ต้องเปลี่ยนให้ตรงกับ ตัว target-->
        <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5><!--ส่วนของเฮด-->
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
                            <div class="mb-3">
                                <label for="chapter" class="col-form-label">chapter:</label>
                                <input type="text" required class="form-control" name="chapter"> <!--required จะแจ้งเตือน หากไม่มีการใส่ข้อมูล-->
                            </div>
                            <div class="mb-3">
                                <label for="title" class="col-form-label">title:</label>
                                <input type="text" required class="form-control" name="title"> <!--required จะแจ้งเตือน หากไม่มีการใส่ข้อมูล-->
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

        <!--สร้างระบบเพิ่มข้อมูล (file) insert.php-->

        <!--ส่วนของหน้าแรก-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1>chapter</h1>
                </div> <!--col-md-6-->
                <div class="col-md-6-flex justify-content-end">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#userModal" data-bs-whatever="@mdo">Add</button>
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
                        <th scope="col">chapter</th>
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
                        echo "<p><td colspan='5' class='text-center'>ไม่พบตอน</td></p>";
                    } else {
                        foreach ($chap as $chap) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $chap['id']; ?></th>
                                <td width="100px"><img class="rounded" width="100%" src="up/<?php echo $chap['img']; ?>" alt=""></td>
                                <td><?php echo $chap['chapter']; ?></td>
                                <td><?php echo $chap['title']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $chap['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $chap['id']; ?>" class="btn btn-danger">Delete</a>
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

<!--imgInput.onchange = evt => {
            const [file] = imgInput.file;
        }
    const [file] = imgInput.file; เป็นการดึง รูปภาพที่ต้องการอัป
if (file) {
    previewImg.src = URL.createObjectURL(file); เป็นการเอารูปมาแสดง -->