<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align="center">Woardbeb Webboard</h1>
    <hr>
    <p align= "center">
    <?php
        if ($_POST["login"]=="admin" && $_POST["pwd"]=="ad1234"){
            echo "ยินดีต้อนรับท่าน แอดมิน";
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']=session_id();
        }
        elseif ($_POST["login"]=="member" && $_POST["pwd"]=="mem1234"){
            echo "ยินดีต้อนรับท่าน สมาชิก";
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']=session_id();
        }
        else{
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
    ?>
    </p>
    <p align= "center"><a href="index.php">กลับสู่หน้าหลัก</a></p>
</body>
</html>