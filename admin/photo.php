<?php include('common/menu.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="content">
    <div class="wrapper">
               <h2 style="text-align:center;">Add Images</h2>
               <br>
               
    <div class="images">
      <div class="title" style="background-color:black;">
           <p style="text-align:center;color:#fff;padding:5px;">Photos</p>
      </div>
        
   
                   <div class="center " style="margin-left:20%;">
                     <form action="" method="POST" enctype="multipart/form-data">
                       <label for="">Add Photo</label>
                        <input type="file" name="file">
                        <label for="">Description</label>
                    
                         <input type="text"  style="border:none;padding:2px;border-bottom:1px solid black;" name="des" id="">
                    
                       
                          <input type="submit" style="padding:5px;border:none;margin-left:2%;" name="upload1"  value="Upload">
                      </form>
                   </div>

                               

                   <div class="row mt-4 ">
                 
               <?php 
                     $sql2= "SELECT * FROM  images";
                     $result2 =mysqli_query($con,$sql2);
                 
                     
                             while($row =mysqli_fetch_array($result2)) { 
                               ?> 
                                 <div class="col-md-3 p-3">
                                         <div class="card">
                                             <div class="card-body">
                                                 <?php    echo "<img   class='card-img-top' src='admin_images/" .$row['image_name']."'  >";?>
                                                 <h2 class="card-title text-center"><?php  echo $row['dis'];?></h2>
                                                 
                                                 
                                                  <form action="" method="post">
                                                       <input type="hidden" value="<?php echo $row['id'];?>" name="id">

                                                       <input type="submit" name="delete1" style="border:none;padding:5px;" value="Delete"> 
                                                  </form>
                                                   
                                                   
                                             </div>
                                           
                                         </div>
                                     </div>




                     <?php  }  ?>

    </div>

                
  </div>














                 <div class="clear"></div>

          </div>
    </div>
<?php include('common/footer.php') ?>
 


<?php
 if(isset($_POST['upload1']) ){
  $target ="admin_images/".basename($_FILES['file']['name']);
  $image =$_FILES['file']['name'];
   $about=$_POST['des'];
      if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
            $sql="INSERT INTO images(image_name, dis) VALUES ('$image','$about')";
            $result=mysqli_query($con,$sql);
            if($result==TRUE){
              echo   "<script type='text/javascript'>
              window.location.href = 'http://localhost/task/admin/photo.php';
                 </script>";
             }else{
              echo "failed";
             }
      }
}else{
   
}
 
   

?>
<!--Delete-->
<?php
   if(isset($_POST['delete1'])){
        $id=$_POST['id'];
        $sql1="DELETE FROM images WHERE id='$id'";
        $result=mysqli_query($con,$sql1);
        if($result2==TRUE){
             echo   "<script type='text/javascript'>
                                            window.location.href = 'http://localhost/task/admin/photo.php';
                                            alert('Deleted Successfully');
                                      </script>";
        }
   }
?>