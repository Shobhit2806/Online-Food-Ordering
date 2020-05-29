
<?php
   $item = $_POST['backstreet']; 

  
   $con = mysqli_connect("localhost","root","");
   if(!$con){

   	die("could not connect".mysql_error());
  }
  mysqli_select_db($con,"PROJECT");

  $result = mysqli_query($con,"Select * From baskin_robins Where ITEM = '$item'"); 
  $row = mysqli_fetch_array($result);
  //echo "<p style='color:red;' ,'margin-top:200px;'>".$row['ITEM']."</p>";
  //echo $row['PRICE'];
  mysqli_close($con);
  ?> 

<!DOCTYPE html>
  <html>
  <head>

  <title> CART</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
   width: 100%;
   height: 100%;
   margin: 0;
   padding: 0;
   font-family:tahoma;
   
   }
   
   header img{
       height:5%;
       width:5%;   
      float: left;	
      margin-top: 20px;
      margin-bottom: 20px;
      margin-left: 150px;
      
      
   }
   
   .area{
   
      float: left;
     margin-top: 50px;
      margin-bottom: 20px;
      margin-left: 10px;
      margin-right: 10px;
     font-family: Tahoma;
   
   }
   .location{
   
   color: #8F8F8F;
   float: left;
    margin-top: 50px;
     margin-bottom: 20px;
   font-family: Tahoma;
   
   
   
   }
   
   
   .group:before,
   .group:after {
      content: "";
      display: table;
   }
   
   .group:after {
      clear: both;
   }
   
   .group {
      zoom: 1;
   }
   
   .navweb li{
      float: left;
      list-style: none;
     
   }
   .navweb a{
   display: block;
   text-decoration: none;
   font-size: 125%;
   font-family: Tahoma;
   color: black;
   padding-right: 50px;
   box-sizing: border-box;
   
   
   }
   .navweb{
    margin-left: 800px;
    margin-top: 50px;
   
   }
   .navweb ul{
   
    margin:0;
    padding:0;
   
   }
   .navweb a:hover{
   
   color:#E67E22;
   
   }
   .checked{
      color:orange;
   
   }
   #bill
   {
      border:2px solid black;
      margin-right:20px;
      padding:40px;
      border-radius:10px;
      box-shadow:5px 10px 18px #888888;

   }
   hr{
      margin-right:100px;
   }

   .rs{
      margin-left:300px;
      
   }
   input{
      color:white;
      padding:10px 15px;
      width:300px;
      border:1px grey;
      border-radius:5px;
      background-color:black;
      width:440px;
   }
  </style>
  </head>
  <body>
     <header class="group">      

	<a href="Home_Page.html"><img src="OnlineFoodOrdering.png"></a>
	<div class="area"><strong><u>Sector 128</u></strong></div>
        <div class="location">Noida,Uttar Pradesh,India</div>
	<nav class="navweb">
		<ul class="group">
			<li><a href="searchbox.html">Search</a></li>
         <li><a href="offers.html">Offers</a></li>
			<li><a href="help.html">Help</a></li>
			<li><a href="login.html">Sign In</a></li>
			<li><a href="empty_cart.html">Cart</a></li>
		</ul>	
 <article>
    <div id='bill'>
   <p><h3><i class="fa fa-shopping-bag" style="font-size:20px; color:orange"><b> From Baskin Robbins</b></i></h3></p>
   <p><i class="fa fa-map-marker" style="font-size:20px"></i><b>No.106, Ground Floor, Dasaprakash Restaurant, Sector 104, Hazipur, Noida</b></p>
   <p><i class="fa fa-clock-o" style="font-size:20px"><b> Arriving in 20-30 mins</b></i></p>
   
   <hr>
   <strong><?php echo $row['ITEM']; ?></strong> 
   <br><br>
   <BR>
   Bill Details 
   <br><br>
   <p id='details'>
   Item total <span class="rs"> &nbsp&nbsp&nbsp&nbsp &#8377 <?php echo $row['PRICE']; ?></span>
   <br><br><br>
   Restaurant Charges <span class="rs"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &#8377 10</span>
   <br><br><br>
   To Pay: <span class="rs"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &#8377 <?php echo $row['PRICE']+10; ?></span>
   <br><br><br>
   <form> <input type="button" value="PLACE ORDER" onclick="call()"></form>
   
</p>
</div>
</article>

</body>
   </nav>          
  
  </html>
<script>

function call()
{
   alert("THANK YOU ! YOUR ORDER HAS BEEN SUCCESSFULLY PLACED");
   if(alert){

      window.location.href='Home_Page_Logged.html'
   }
   

}

   </script>
  
  

  




  
    

