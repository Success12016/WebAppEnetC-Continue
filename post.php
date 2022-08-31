<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Woardbeb Webboard</h1>
    <hr>
    <div align="center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"];?><br>
        <table style="border:2px solid black; width:40%;" align="center">
        <tr><td style="background-color: #6CD2FE;" colspan="2";>แสดงความคิดเห็น</td></tr>
        <tr><td colspan="2" align="center"><textarea id="comment" name="comment" rows="5" cols="40"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    </div>
    <p align= "center"><a href="index.html">กลับสู่หน้าหลัก</a></p>
</body>
</html>