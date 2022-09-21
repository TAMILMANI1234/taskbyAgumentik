<?php include('common/menu.php') ?>

<div class="main">
    <div class="wrapper">
            <h1>Add Admin</h1>
                <?php
                   if(isset($_SESSION['add']))
                   {
                       echo $_SESSION['add'];//display session
                       unset($_SESSION['add']);//remove session
                   }
                
                ?> 
    <div class="form">
            <form method="POST" action="" class="f1">
                 
                <br>
                
                <div class="inputbox">
                <input type="text" required="required" name="username">
                <span>Admin Username</span>
                </div>
                
                <div class="inputbox">
                <input type="text" required="required" name="pass">
                <span>Admin Password</span>
                </div>
                <div class="inputbox">
                <input type="submit" name="submit" value="Add Admin">
                </div>
        </form>
        <br><br>
        </div>
    </div>
</div>
<?php include('common/footer.php') ?>

<?php

   if(isset($_POST['submit'])){
            
             $username=$_POST['username'];
             $pass=$_POST['pass'];

            $sql="INSERT INTO register SET  username='$username',password='$pass'";
            $result=mysqli_query($con,$sql)or die(mysqli_error());

            if($result==TRUE){
                $_SESSION['add']="Admin Added successfully";
                header("location:".URL."admin/setting.php");
            }
            else{
                $_SESSION['add']="Failed to Add Admin";
                header("location:".URL."admin/add-admin.php");

            }
   }


?>

 