<?php include('common/menu.php') ?>
<div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <div class="container">
  <?php
                       if(isset($_SESSION['adminlogin']))
                       {
                           echo $_SESSION['adminlogin'];//display session
                           unset($_SESSION['adminlogin']);//remove session
                       }
                     ?>
  <h2 class="text-center">Peoples contact</h2>
  <br>
<table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
       <th>Message</th>
    </tr>
  </thead>
  <tbody>
      <?php 
                     $sql2= "SELECT * FROM   public";
                     $result2 =mysqli_query($con,$sql2);
                     $x = 1;
                     
                             while($row =mysqli_fetch_array($result2)) { 
                                 
                               ?> 
          <tr>
          <th scope="row"><?php echo $x++;?></th>
            <th scope="row"><?php echo $row['name']?></th>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['message']?></td>
          </tr>

  </tbody>
  <?php } ?>
</table>
  </div>

                     
</div>
<?php include('common/footer.php') ?>