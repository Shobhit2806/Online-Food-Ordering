<?php
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mob = $_POST['telephone'];
   $password = $_POST['password'];

  
   $con = mysqli_connect("localhost","root","");
   if(!$con){

   	die("could not connect".mysql_error());
   }
   mysqli_select_db($con,"PROJECT");
   
   $query = "INSERT Into CUSTOMER Values('$fname','$lname','$mob','$email','$password')";

   if(!mysqli_query($con,$query))
   {

       echo "Cannot Sign Up PLease Try Again!!!";

   }
   else
   {
      header('Location: Home_Page_Logged.html');
   }
     
    
 

  mysqli_close($con);
    ?>

