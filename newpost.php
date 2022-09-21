<?php
    session_start();
    if(!isset($_SESSION['id'])){
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
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Woardbeb Webboard</h1>
    <hr>
    <?php
        echo"ผู้ใช้ : $_SESSION[username]";
    ?>
    <br>
    <table>
        <tr><td>หมวดหมู่ : </td><td>
            <select name="category">
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
            </select>
        </td></tr>
        <tr><td>หัวข้อ : </td><td>
            <input type="text" name="topic" size="30">
        </td></tr>
        <tr><td>เนื้อหา : </td><td>
            <textarea id="comment" name="desc" rows="3" cols="30"></textarea>
        </td></tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
</body>
</html>