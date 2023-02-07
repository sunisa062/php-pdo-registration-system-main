<?php
/*มีการเก็บ session*/
session_start();
require_once "config/db.php"; /*เข้าไปเอาไฟล์db*/

/*เช็ค ปุ่ม การรับข้อมูล*/
if (isset($_POST['submit'])) {
    $img = $_FILES['img'];
    $chapter = $_POST['chapter'];
    $content = $_POST['content'];

    $allow = array('jpg', 'jpeg', 'png');/*ชนิดรูปที่อัปได้*/
    $extension = explode(".", $img['name']);/*แยกนามสกุลไฟล์กับชื่อไฟล์*/
    $fileActExt = strtolower(end($extension));/*แปลงนามสกุลไฟล์ให้เป็นพิมเล็ก*/
    $fileNew = rand() . "." . $fileActExt;
    $filePath = "photo/" . $fileNew;/*อัปโหลดไปที่โฟลเดอร์อัป*/

    /*เช็คนามสกุลไฟล์ และส่งallowมาเช็คว่าตรงไหม ก่อนอัป*/
    if (in_array($fileActExt, $allow)) {
        if ($img['size'] > 0 && $img['error'] == 0) { /*เช็คขนาด*/
            if (move_uploaded_file($img['tmp_name'], $filePath));  /*ใช้move อัปไปที่โฟลเดอร์ up จะมีการส่ง argsไป2 ตัว*/ {
                $sql = $conn->prepare("INSERT INTO episode(img, chapter, content) VALUES(:img, :chapter, :content)");/*$conn เป็นตัวเชื่อมต่อกับฐาน*/
                $sql->bindParam(":img", $fileNew);  /*ส่งค่าตัวแปรมาให้กับตัวที่เราแทนค่า (values แทนค่า)*/
                $sql->bindParam(":chapter", $chapter);
                $sql->bindParam(":content", $content);
                $sql->execute();  /*รัน แล้วinsert ข้อมูลไปในฐาน*/

                if ($sql) {
                    $_SESSION['success'] = "Data has been inserted succesfully";
                    header("location: ad-add.php");
                } else {
                    $_SESSION['error'] = "Data has not been inserted succesfully";
                    header("location: ad-add.php");
                }
            }
        }
    }
}
