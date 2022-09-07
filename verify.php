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
        $login=$_POST["login"];
        $pwd=$_POST["pwd"];
        if ($login=="admin" && $pwd=="ad1234")
            echo "ยินดีต้อนรับท่าน แอดมิน";
        elseif ($login=="member" && $pwd=="mem1234")
            echo "ยินดีต้อนรับท่าน สมาชิก";
        else
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    ?>
    </p>
    <p align= "center"><a href="index.php">กลับสู่หน้าหลัก</a></p>
</body>
</html>