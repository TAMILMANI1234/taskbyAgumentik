<?php
     include('../database/connect.php')  ;
     $id=$_GET['id'];
     $sql="DELETE FROM register WHERE id=$id";
     $result=mysqli_query($con,$sql)or die(mysqli_error());
     if($result==TRUE){
        $_SESSION['delete']="Admin deleted successfully";
        header("location:".URL."admin/setting.php");
     }
     else{
        $_SESSION['delete']="Failed to delete Admin";
        header("location:".URL."admin/setting.php");
     }



?>