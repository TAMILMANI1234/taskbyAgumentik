<?php include('../database/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div id="login-form-wrap">
  <h2>Login</h2>
  <?php
                       if(isset($_SESSION['adminlogin']))
                       {
                           echo $_SESSION['adminlogin'];//display session
                           unset($_SESSION['adminlogin']);//remove session
                       }
                       if(isset($_SESSION['no-login']))
                       {
                           echo $_SESSION['no-login'];//display session
                           unset($_SESSION['no-login']);//remove session
                       }
                     ?>
  <form id="login-form" method="POST">
    <p>
    <input type="text"   name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password"   name="password" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit"  name="submit" value="Login">
    </p>
  </form>
   <br><br>
</div>
</body>
</html>

<?php
   if(isset($_POST["submit"])){
        $username=$_POST['username'];
        $pass=$_POST["password"];
          $SELECT = "SELECT * FROM register WHERE  username = '$username'&& password='$pass'";
          $result=mysqli_query($con,$SELECT);
           $num =mysqli_num_rows($result);

       if($num==1){
            $_SESSION['adminlogin']="<div class='success'>Login Success</div>";
            $_SESSION['user']=$username;
            
           header("location:".URL."admin/adminindex.php"); 
           echo "ok";
        }
        else{
        /*    $_SESSION['adminlogin']="<div class='error'>Login Failed</div>";
            header("location:".URL.'admin/adminlogin.php');*/
              echo "no";
        } 
   }
   else{
     
   }  
 
 

?>