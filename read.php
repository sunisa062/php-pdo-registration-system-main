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
    <link href="css/styleread.css" rel="stylesheet">
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
            </div>
        </nav>
</header>

<body style="background-color:  rgba(233, 235, 229, 0.858);">
    <div class="index">
        <div class="row" style="text-align: center;">
            <?php
            $stmt = $conn->query("SELECT * FROM episode");
            $stmt->execute();
            $episode = $stmt->fetchAll();

            if (!$episode) {
                echo "<p><td colspan='1' class='text-center'>ไม่พบเนื้อหา</td></p>";
            } else {
                foreach ($episode as $episode) {
            ?> <center>
                        <div class="box" style="background-color: rgb(253,245,230); height:auto; width: 900px;">
                            <div class="title" style="background-color: rgb(253,245,230); width: 800px;">
                                <div class="store1 mb-3" style="background-color: rgb(253,245,230);">
                                    <p class="chapter"><?php echo $episode['chapter']; ?></p>
                                </div>
                                <div class="store2 mb-3" style="background-color: rgb(253,245,230);">
                                    <p class="content"><?php echo $episode['content']; ?></p>
                                </div>
                            </div>
                        </div>
        
<?php }
            } ?>
<div class="button">
    <a href="user.php">
    <button type="button" class="btn btn-outline-dark" style="font-size: 30px;">back</button><!--ปุ่มนี้ยังไม่เชื่อม-->
    </a>
</div>
    </div>
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