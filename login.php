<?php
   $mob = $_POST['telephone'];
   $password = $_POST['password'];

  
   $con = mysqli_connect("localhost","root","");
   if(!$con){

   	die("could not connect".mysql_error());
   }
   mysqli_select_db($con,"PROJECT");

   $result = mysqli_query($con,"Select * From CUSTOMER Where mob='$mob' AND password='$password'"); 
   $row = mysqli_fetch_array($result);
   if($row)
   {
   
      header('Location: Home_Page_Logged.html');
     
    }
   else
   {     
           header('Location: login.html');
   	    
         

          
   }


  mysqli_close($con);
    ?>

