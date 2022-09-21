<?php 
   include('../database/connect.php') ;
 
   include('authorization.php') ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
    <link rel="stylesheet" href="css/admin-common.css">
    <sctipt scr="http://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
 
</head>
<body>
    <br>
    <!--Menu Section start -->
    <div class="menu">
          <div class="wrapper">
               <ul>
                   <li><a href="adminindex.php">Home</a></li>
                 
                   <li><a href="photo.php">Photos</a></li>
                   <li><a href="social.php">Social Media</a></li>
                   <li><a href="setting.php">Add Admin</a></li>
                   <li><a href="admin_logout.php">Logout</a></li>

               </ul>
          </div>
    </div>
    <!--Menu Section ends -->
   <br>
