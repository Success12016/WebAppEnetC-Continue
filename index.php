<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woardbeb Webboard</title>
</head>
<?php
    if(!isset($_SESSION['id'])){
?>
<body>
    <h1 style="text-align: center;">Woardbeb Webboard</h1>
    <hr>
    หมวดหมู่:
    <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <a href="login.php" style="float: right;">เข้าสู่ระบบ</a> 
    <br>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href =post.php?id="."$i".">กระทู้ที่ ".$i."</a></li>";
            }
        ?>
    </ul>
</body>
<?php
    }else{
?>
    <body>
    <h1 style="text-align: center;">Woardbeb Webboard</h1>
    <hr>
    หมวดหมู่:
    <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <div style="float: right;">
    <?php
    echo 'ผู้ใข้งานในระบบ : ',$_SESSION['username'];
    ?>
    <a href="logout.php">ออกจากระบบ</a> 
    </div>
    <br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <br>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href =post.php?id="."$i".">กระทู้ที่ ".$i."</a>";
                $r = $_SESSION['role'];
                if ($r=="a")
                echo "&nbsp;&nbsp;&nbsp;<a href =delete.php?id="."$i".">ลบ</a></li>";
            }
        ?>
    </ul>

</body>
<?php
    }
?>
</html>