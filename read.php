<?php
    session_start();
    require_once 'config/db.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
    <link href="php/css/styleread.css" rel="stylesheet">
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
            </div>
        </nav>
</header>

<body>
    <center>
        <?php
        $stmt = $conn->query("SELECT * FROM episode");
        $stmt->execute();
        $episod = $stmt->fetchAll();

        if (!$episode) {
            echo "<p><td colspan='1' class='text-center'>ไม่พบเนื้อหา</td></p>";
        } else {
            foreach ($episode as $episode) {
        ?>
                <div class="title" style="background-color: rgb(253,245,230); width:1200px">
                    <div class="store mb-3">
                        <p class="title"><?php echo $episode['title']; ?></p>
                            <!--ตอนที่--><label for="chapter" class="col-form-label">ตอนที่</label>
                            <input type="text" class="form-control" style="width: 100px;">
                    </div>
                    <div class="store mb-3">
                        <p class="content"><?php echo $episode['content']; ?></p>
                        <!--เนื้อหา--><label class="col-form-label" for="text">เนื้อหา</label><br>
                        <textarea type="text col=50" id="text" class="form-control" style="width: 1000px; height: 1000px;"></textarea>
                    </div>
            <?php }
        } ?>
    </center>
    <div class="button">
        <button type="button" class="btn btn-dark">back</button><!--ปุ่มนี้ยังไม่เชื่อม-->
    </div>
    <footer class=" footer">
        <p>
            Copyright@2023
        </p>
    </footer>
    </div>
    </div><!-- box -->
    </div>
</body>

</html>