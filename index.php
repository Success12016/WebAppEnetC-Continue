<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Woardbeb Webboard</title>
    <script>
        function myFunction1(){
            let r=confirm("ต้องการจะลบจริงหรือไม่่่่่่่่");
            return r;
        }
    </script>
</head>
<?php
    if(!isset($_SESSION['id'])){
?>
<body>
    <div class="container">
    <h1 style="text-align: center;">Woardbeb Webboard</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="d-flex">
        <div>
            <label>หมวดหมู่</label>
            <select name="category" class="form-select">
                            <?php
                                $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                $sql="SELECT * FROM category";
                                foreach($conn->query($sql) as $row){
                                    echo "<option value=" .$row['id'].">".$row['name']."</option>";
                                }
                                $conn=null;
                            ?>
                        </select>
        </div>
    </div>
    <br>
    <table class="table table-striped">
    
    <?php 
            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

            $sql1 = "SELECT * FROM post ORDER BY id desc";
            $result1 = $conn->query($sql1);

            foreach($conn->query($sql1) as $row){
                $result2 = $conn->query("SELECT * FROM category where id = $row[cat_id]");
                $data2=$result2->fetch(PDO::FETCH_ASSOC);

                $result3 = $conn->query("SELECT * FROM user where id = $row[user_id]");
                $data3=$result3->fetch(PDO::FETCH_ASSOC);

                echo "<tr><td>[ $data2[name] ]<a href = post.php?id=$row[id] style=text-decoration:none> $row[title]</a><BR>$data3[name] - $row[post_date]</td>";
                echo "</tr>";
            }
            $conn = null;
    ?>
    
    </table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>
</body>
<?php
    }else{
?>
    <body>
    <div class="container">
    <h1 style="text-align: center;">Woardbeb Webboard</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="d-flex justify-content-between">
        <div>
            <label>หมวดหมู่</label>
            <select name="category" class="form-select">
                            <?php
                                $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                $sql="SELECT * FROM category";
                                foreach($conn->query($sql) as $row){
                                    echo "<option value=" .$row['id'].">".$row['name']."</option>";
                                }
                                $conn=null;
                            ?>
                        </select>
        </div>
        <div>
            <a href="newpost.php" class="btn btn-success btn-sm">
            <i class="bi bi-plus-square-fill"></i> สร้างกระทู้ใหม่</a>
        </div>
    </div>
    <br>
    <table class="table table-striped">
    
    <?php 
            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

            $sql1 = "SELECT * FROM post ORDER BY id desc";
            $result1 = $conn->query($sql1);

            foreach($conn->query($sql1) as $row){
                $result2 = $conn->query("SELECT * FROM category where id = $row[cat_id]");
                $data2=$result2->fetch(PDO::FETCH_ASSOC);

                $result3 = $conn->query("SELECT * FROM user where id = $row[user_id]");
                $data3=$result3->fetch(PDO::FETCH_ASSOC);

                echo "<tr><td>[ $data2[name] ]<a href = post.php?id=$row[id] style=text-decoration:none> $row[title]</a><BR>$data3[name] - $row[post_date]</td>";
                if($_SESSION['role'] == 'a'){
                    echo "<td><a href = delete.php?id=$row[id] class='btn btn-danger btn-sm mt-2' onclick='return myFunction1();'><i class='bi bi-trash'></i></a></td>";
                }
                echo "</tr>";
            }
            $conn = null;
    ?>
    
    </table>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</div>
</body>
<?php
    }
?>
</html>
