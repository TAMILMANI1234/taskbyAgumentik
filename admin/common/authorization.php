<?php
    
  if(!isset($_SESSION["user"])){  //if user session is not set       
       $_SESSION['no-login']="<div>Please Login to Access Admin Interface</div>";
       header("location:".URL.'admin/login.php');
  }

?>