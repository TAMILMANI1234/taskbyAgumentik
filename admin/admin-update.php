<?php include('common/menu.php') ?>

 <style>
     .container1 {
            border-radius: 5px;
            background-color: #f2f2f2;
             
             border: 5px solid #FFFF00;
             display: flex;
              justify-content: center;
             width:50%;
             margin: 0 auto;
             padding:60px;
             border-radius:20%;"
     }
     input[type=text], select, textarea {
        width: 100%; /* Full width */
        padding: 12px; /* Some padding */ 
        border: 1px solid #ccc; /* Gray border */
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; /* Add a top margin */
        margin-bottom: 16px; /* Bottom margin */
        resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

 
input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
 
input[type=submit]:hover {
  background-color: #45a049;
}

 </style>
    <div class="wrapper">
             <div class="container1" >
                 <?php
                    $id=$_GET['id'];
                    $sql="SELECT * FROM register WHERE id=$id";
                    $result=mysqli_query($con,$sql)or die(mysqli_error());
                    if($result==TRUE){
                        $count=mysqli_num_rows($result);
                        if($count==1){
                               $row=mysqli_fetch_assoc($result);
                               $fname=$row['id'];
                               $username=$row['username'];
                               $pass=$row['password'];
                        }else{
                            header("location:".URL."admin/setting.php");
                        }
                    }
                 ?>
                    <form action="" method="POST" class="f2">

                        <label >Admin ID</label>
                        <input type="text"  readonly="readonly"  name="name" value="<?php echo $fname?>" >

                        <label  >Admin Username</label>
                        <input type="text"   name="username"   value="<?php echo $username?>">

                        <label >Admin Password</label>
                        <input type="text"   name="pass"  value="<?php echo $pass?>">

                         

                        <input type="hidden" name="id" value="<?php echo $id?>">

                        <input type="submit" name="submit" value="Save changes">

                    </form>
                     
             </div>
    </div>
 
    <?php
       if(isset($_POST['submit'])){
               
                $adminuser=$_POST['username'];
                $adminpass=$_POST['pass'];
                 $adminid=$_POST['id'];

                  $sql1="UPDATE  register SET username='$adminuser', password='$adminpass' WHERE id='$adminid'";
                $result1=mysqli_query($con,$sql1)or die(mysqli_error());

              if($result1==TRUE){
                    $_SESSION['update']="Admin updated successfully";
                    header("location:".URL."admin/setting.php");
                }
                else{
                    $_SESSION['update']="Failed to update";
                    header("location:".URL."admin/setting.php");
                } 

       }else{
               
       }
    
    
    ?>


<?php include('common/footer.php') ?>
