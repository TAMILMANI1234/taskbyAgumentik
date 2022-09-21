<?php
    include('../database/connect.php');
    //destroy all the session 
    session_destroy();
    
    header("location:".URL.'admin/login.php');

?>