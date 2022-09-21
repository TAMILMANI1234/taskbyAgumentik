<?php include('common/menu.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
<form method="POST">
<?php
                   if(isset($_SESSION['link']))
                   {
                       echo $_SESSION['link'];//display session
                       unset($_SESSION['link']);//remove session
                   }
                   if(isset($_SESSION['delete']))
                   {
                       echo $_SESSION['delete'];//display session
                       unset($_SESSION['delete']);//remove session
                   }
                
                ?> 
  <div class="mb-3">
    <label class="form-label">FaceBook Link</label>
    <input type="text"    class="form-control" name="facebook" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Instragram Link</label>
    <input type="text"    class="form-control" name="insta" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Twiter Link</label>
    <input type="text"   class="form-control" name="twiter" >
   
  </div>

  <div class="mb-3">
    <label class="form-label">Email Address</label>
    <input type="text"    class="form-control" name="email" >
   
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Add Link</button>
</form>
</div>

<br>
<br>

   <div class="container">
   <table class="table">
  <thead>
    <tr>
      
      <th scope="col">FaceBook</th>
      <th scope="col">Instagram</th>
      <th scope="col">Twiter</th>
      <th scope="col">Email Id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $sql2= "SELECT * FROM  socialmedia";
      $result2 =mysqli_query($con,$sql2);
      while($row =mysqli_fetch_array($result2)) { 
    ?>
    <tr>
       <td>  <textarea class="form-control"  readonly="readonly"  style="height: 50px" ><?php echo $row['facebook']?></textarea></td>
       <td>  <textarea class="form-control"  readonly="readonly"  style="height:50px"><?php echo $row['insta']?></textarea></td>
       <td>  <textarea class="form-control" readonly="readonly"    style="height: 50px"><?php echo $row['twiter']?></textarea></td>
       <td>  <textarea class="form-control"  readonly="readonly"   style="height: 50px"><?php echo $row['email']?></textarea></td>

       <td>
            <button style="padding:10px;background-color: red; border: none;"> <a style="text-decoration: none;color:white;" href="<?php echo URL; ?>admin/delete-link.php?id=<?php echo $row['id'] ?>"><span>Delete</span> </a> </button>
          </td>
   
    </tr>
    <?php  }  ?>
  </tbody>
</table>
   </div>

<?php include('common/footer.php') ?>
<?php
    if(isset($_POST['submit'])){
     
        $face=$_POST['facebook'];
        $insta=$_POST['insta'];
       $twiter=$_POST['twiter'];
         $email=$_POST['email'];

       $sql="INSERT INTO socialmedia(facebook, insta, twiter, email) VALUES ('$face','$insta','$twiter','$email')";
       $result=mysqli_query($con,$sql)or die(mysqli_error());

       if($result==TRUE){
           $_SESSION['link']="Social Link Added successfully";
           header("location:".URL."admin/social.php");
       }
       else{
           $_SESSION['link']=" Social Link Failed to Add Admin";
           header("location:".URL."admin/social.php");

       } 
}

?>