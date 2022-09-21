<?php  include('./database/connect.php') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./index.css">
    <title>Task</title>
</head>
<body>
    <!--Nav bar start-->
      <nav class="navbar">
        <h1 class="logo">BARDI</h1>
        <ul class="nav-links">
            <li><a href="">Products</a></li>
            <li><a href="">Solutions</a></li>
            <li><a href="">Supports</a></li>
            <li><a href="http://localhost/task/contactus.php">Contact Us</a></li>
            <div class="images">
                <ul>
                    <li><a href=""><img src="./images/icons8_search_40px_1.png" alt=""></a></li>
                    <li><a href="admin/login.php"><img src="./images/icons8_customer_40px.png" alt=""></a></li>
                </ul>
            </div>
            
        </ul>
        <img src="./images/menubtn.jpg" alt="" class="ment-btn">
      </nav>
    <!--Nav bar ends-->
    <!--Headder section start-->
        <div class="header">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br> <br>
            <?php
              if(isset($_SESSION['send']))
              {
                  echo $_SESSION['send'];//display session
                  unset($_SESSION['send']);//remove session
              }

            ?>
            <div class="header-content">
                <div class="row ">
                    <div class="col-lg-4 ">
                         <div class="first p-5">
                            <p>Always in Control</p>
                             <br>
                            <a class="content-btn" href="">Explore Products</a>
                         </div>
                          
                    </div>
                    <div class="col-lg-8 p-3">
                        <div class="slogon">
                            <p>One simple ecosystem <br>
                                for smart living solotions.
                              </p>
                        </div>
                         
                    </div>
                 </div>

            </div>
           
        </div>
     <!--Headder section end-->
     <!--Menu script-->
     <script>
        const menu=document.querySelector('.ment-btn')
        const links=document.querySelector('.nav-links')
        menu.addEventListener('click',()=>{
               links.classList.toggle('mobile-menu')
        });
     </script>
     <!--Menu script-->
             
   

     <!--Content body starts-->
       <div class="container">
                <div class="title" id="title">
                    <h1>Build a smart home to uplift <br> your everyday living and <br> meaningful moments.</h1>
            </div>
            <div class="details">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ratio ratio-16x9">
                            <iframe style="border-radius:20px ;" src="https://www.youtube.com/watch?v=y7_Spedf2BI" title="YouTube video 
                              player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                              encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                    </div>
                    <div class="col-lg-4"> 
                          <img style="border-radius:20px" src="./images/w3.jpg" width="354" alt="">
                    </div>
                </div>
            </div>
 
            <br> 
             <!--system starts-->
                 <div class="system" id="system">
                          <h2>Start your System</h2>
                        
                          <div class="products">
                          <?php 
                     $sql2= "SELECT * FROM  images";
                     $result2 =mysqli_query($con,$sql2);
                 
                     
                             while($row =mysqli_fetch_array($result2)) { 
                                 
                               ?> 
                             <div class="row">
                                <div class="col-6 text-center images">
                                       <!--<img style="padding:20px;" src="./images/pmax.jfif" width="400" alt="">---><br>
                                       <?php    echo "<img   class='card-img-top' src='./admin/admin_images/" .$row['image_name']."'  >";?>
                                               
                                      
                                       <br><br>
                                       <p>
                                       
                                </div>

                                <div class="col-6 text-center images">
                                      
                                       <br><br>
                                       <p style=" font-size: 18px;text-align: center;margin-top: 20%;">
                                       <?php echo $row['dis'];?>  </p>
                                </div>
                                
                             
                             <br><br>
                          </div>
                          <?php  }  ?>
                  </div>
                 
              <!--system ends-->
            <div class="message">
                <div class="img">
                    <img src="./images/p1.jfif" width="70" class="rounded-circle"   alt=""><span>Ray Holland</span>
                </div>
                 <div class="message-content">
                    <p>"
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                     "
                    </p>
                 </div>
              
            </div>
       </div>
         
          
     <!--Content body ends-->

     <!--Footer starts-->
     <div class="container">
        <footer class="footer-distributed">

			<div class="footer-right">
        <?php
           $sql2= "SELECT * FROM  socialmedia";
           $result2 =mysqli_query($con,$sql2);
           while($row =mysqli_fetch_array($result2)) { 
            ?>
       
       
				<a href="<?php  echo $row['facebook']?>"><i class="fa fa-facebook"></i></a>
				<a href="<?php  echo $row['twiter']?>"><i class="fa fa-twitter"></i></a>
				<a href="<?php  echo $row['insta']?>"><i class="fa fa-instagram"></i></a>
				<a href="mailto:<?php  echo $row['email']?>"><i class="fa fa-envelope" aria-hidden="true"></i></i></a>
          <?php }?>
			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a  href="#">Home</a>
					<a href="#title">Images</a>

					<a  href="#system">Products</a>

					<a href="#">Messages</a>

					<a href="http://localhost/task/contactus.php">Contact</a>
				</p>

				<p>Bardi &copy; 2022</p>
			</div>

		</footer>
     
      </div>
      <!--Footer ends->
</body>
</html>