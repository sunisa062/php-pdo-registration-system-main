<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="css/stylepage.css" rel="stylesheet">
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
        <div class="middle" style="background-color: rgba(255, 255, 255, 0.656);width: 1000px;">
            <div class="boxmiddle" style="background-color: rgba(255, 255, 255, 0.656); width: 950px;">
                <div class="submiddle" style="background-color: rgba(255, 255, 255, 0.656); width: 900px;">
                    <h1 class="boxname">
                        ตอนทั้งหมด
                    </h1>
                    <p align="justify:50">
                        <hr width="800" class="line">
                    </p>
                    <div class="boxcard">
                        <a href="">
                            <img src="เหม่งแตกเพราะแดกเยอะ.jpeg" width="50px" class="img">
                        </a>
                    </div>
                    <div class="boxtext">
                        <a href="" class="link-dark">
                            <p class="textcard">
                                ตอนที่
                            </p>
                        </a>
                    </div>
                    <p align="justify:50">
                        <hr width="800" class="line">
                    </p>
                    <div class="boxcard">
                        <a href="">
                            <img src="เหม่งแตกเพราะแดกเยอะ.jpeg" width="50px" class="img">
                        </a>
                    </div>
                    <div class="boxtext">
                        <a href="" class="link-dark">
                            <p class="textcard">
                                ตอนที่
                            </p>
                        </a>
                    </div>
                    <p align="justify:50">
                        <hr width="800" class="line">
                    </p>
                    <div class="boxcard">
                        <a href="">
                            <img src="เหม่งแตกเพราะแดกเยอะ.jpeg" width="50px" class="img">
                        </a>
                    </div>
                    <div class="boxtext">
                        <a href="read.php" class="link-dark">
                            <p class="textcard">
                                ตอนที่
                            </p>
                        </a>
                    </div>
                    <p align="justify:50">
                        <hr width="800" class="line">
                    </p>
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