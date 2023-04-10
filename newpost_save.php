<?php
    session_start();

    $category = $_POST['category'];
    $topic = $_POST['topic'];
    $comment = $_POST['comment'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    
    $u = (int)($_SESSION["user_id"]);

    $sql1 = "INSERT INTO post (title,content,post_date,cat_id,user_id) VALUES ('$topic','$comment',NOW(),$category,$u)";
    $conn->exec($sql1);

    $conn=null;
    header("location:index.php");
    die();
?>