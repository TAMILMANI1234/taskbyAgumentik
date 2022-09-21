<?php  include('./database/connect.php') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./contactus.css">
</head>
<body>
        <div class="login-box">
        <h2>Contact Form</h2>
        <form method="POST">
          
            <div class="user-box">
      
            <input type="text" name="name" placeholder="Name" required="">
            
            </div>
            <div class="user-box">
            <input type="text" name="phone" placeholder="Mobile Number" required="">
            
            </div>

            <div class="user-box">
            <input type="text" name="email" placeholder="Email Id" required="">
            
            </div>

            <div class="user-box">
             
            <textarea id="w3review" name="message" rows="4" cols="40" placeholder="Message" required=""></textarea>
            </div>
            
            
            <button type="submit" name="submit"  >Send</button>
            
        </form>
        </div>
    
</body>
</html>
<?php
  if(isset($_POST['submit'])){
     
    $name=$_POST['name'];
    $phone=$_POST['phone'];
     $message=$_POST['message'];
    $email=$_POST['email'];

   $sql="INSERT INTO  public(name, mobile, email, message) VALUES ('$name','$phone','$email','$message')";
   $result=mysqli_query($con,$sql)or die(mysqli_error());
   
   $to = $email;
   $fromEmail="k.tamilmani1234@gmail.com";
   $subject = "Mail From Admin";
   $message = '<!doctype html>
           <html lang="en">
           <head>
               <meta charset="UTF-8">
               <meta name="viewport"
                   content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
               <meta http-equiv="X-UA-Compatible" content="ie=edge">
               <title>Document</title>
           </head>
           <body>
           <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
               <div class="container">
               Thank you for visiting out web page, we contact you soon!!<br/>
                   Regards<br/>
               '.$fromEmail.'
               </div>
           </body>
           </html>';
            
          
           
           $headers = 'From: k.tamilmani1234@gmail.com'       . "\r\n" .
                        "Reply-To: '.$to.'" . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
       
           mail($to, $subject, $message, $headers);

   
   if($result==TRUE){
      
       
        

       $_SESSION['send']="Your message send successfully";
       header("location:".URL."index.php");
      
       
 
          
   }
   else{
       $_SESSION['send']="  Failed to message";
       header("location:".URL."index.php");
    
   }  
 
}

?>
<?php

?>