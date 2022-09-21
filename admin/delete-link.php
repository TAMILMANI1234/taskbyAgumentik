<?php
     include('../database/connect.php')  ;
     $id=$_GET['id'];
     $sql="DELETE FROM socialmedia WHERE id=$id";
     $result=mysqli_query($con,$sql)or die(mysqli_error());
     if($result==TRUE){
        $_SESSION['delete']="Link deleted successfully";
        header("location:".URL."admin/social.php");
     }
     else{
        $_SESSION['delete']="Failed to delete Link";
        header("location:".URL."admin/social.php");
     }



?>