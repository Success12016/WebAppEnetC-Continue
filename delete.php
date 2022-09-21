<?php
session_start();
   $id=$_GET["id"];
   if($_SESSION['role']=='a'){
        echo "ลบกระทู้หมายเลข $id";
   }
   else{
        header("location:index.php");
        die();
   }
?>