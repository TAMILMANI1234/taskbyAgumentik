<?php
           
       session_start();
       define("URL",'http://localhost/task/');
        
        define('LOCALHOST','localhost');
        define('DB_USERNAME','root');
        define('DB_PASS','');
        define('DB_NAME','task');
        $con=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASS) or die(mysqli_error());
        $select =mysqli_select_db($con,DB_NAME) or die(mysqli_error());
?>
