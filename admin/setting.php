<?php include('common/menu.php') ?>
<div class="content">
    <div class="wrapper">
               <h2>Account Setting</h2>
               <br>
               <?php
                   if(isset($_SESSION['add']))
                   {
                       echo $_SESSION['add'];//display session
                       unset($_SESSION['add']);//remove session
                   }
                   if(isset($_SESSION['delete']))
                   {
                       echo $_SESSION['delete'];//display session
                       unset($_SESSION['delete']);//remove session
                   }
                   if(isset($_SESSION['update']))
                   {
                       echo $_SESSION['update'];//display session
                       unset($_SESSION['update']);//remove session
                   }
                
                ?> 
             
               <button class="btn-add"><a href="add-admin.php" >Add Admin</a> </button>
               <br><br>
                   <br><br>
                   <table class="tbl-full">
                     <tr>
                       <th>S.no</th>
                       
                       <th>Username</th>
                       <th>Password</th>
                       <th>Action</th>
                     </tr>

                      <?php
                        
                        $sql="SELECT * FROM  register";
                        $result=mysqli_query($con,$sql)or die(mysqli_error());
                        if($result==TRUE){
                          $s=1;
                          $count=mysqli_num_rows($result);
                          if($count>0){
                                  while($rows=mysqli_fetch_assoc($result)){
                                          $id=$rows['id'];
                                          $fname=$rows['username'];
                                          $username=$rows['password'];
                                          ?>

                            <tr>
                                <td><?php echo $s++?></td>
                                <td><?php echo $fname?></td>
                                <td><?php echo $username?></td>
                                <td>
                                    <button class="btn-update"> <a href="<?php echo URL; ?>admin/admin-update.php?id=<?php echo $id ?>"><span> Update</span> </a> </button>
                                    <button class="btn-delete"> <a href="<?php echo URL; ?>admin/admin-delete.php?id=<?php echo $id ?>"><span>Delete</span> </a> </button>
                                </td>
                             </tr>


                  <?php
                                          
                                  }
                          }
                          else{

                          }
                        }
                      
                      ?>

                    
 
                   </table>

                
                  
          </div>
    </div>

<?php include('common/footer.php') ?>