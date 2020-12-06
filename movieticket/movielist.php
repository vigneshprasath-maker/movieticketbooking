<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "movieticket";
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
error_reporting(0);
$moviename=$_POST['moviename'];
if(isset($_POST['submit1'])){
  $c=$_POST['username'];
  $v=$_POST['password'];
 $sql_query = "SELECT * FROM login WHERE username = '".$c."' and password = '".$v."'" ;  
                          $result1 = mysqli_query($conn, $sql_query);
if($result1->num_rows == 0) {
     
        header("location: ./login.php");
} else {
    
}
    }

$result = mysqli_query($conn,"SELECT * FROM movies");
$sql2="SELECT * FROM login where username = '".$c."'";
$res = mysqli_query($conn,$sql2);
$row = mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">

</style>



  <title>movies list</title>
	<?php
if (mysqli_num_rows($result) > 0) {
?>
	<style type="text/css">




	</style>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body  class="body-background">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="#"><img src="https://www.nextbigbrand.in/wp-content/uploads/2019/07/bookmyshow.png" class="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="a-back" style="padding: 15px 15px;">Welcome <?php echo $c?></li>
        <li style="padding: 15px 0px;">Wallet :<?php echo $row["wallet"];?></li>


      <li><a href="./login.php">Sign out</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="container container-width" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 


    <div class="carousel-inner">

      <div class="item active">
        <img src="https://cdn.shopify.com/s/files/1/0301/5131/1495/collections/Soorarai-Pottru-Banner.jpg?v=1602855052" class="carousel-img">
       
      </div>
    
      <div class="item">
        <img src="https://www.stormgarden.co.uk/wp-content/uploads/2015/03/BrandMovies-webbanner.jpg" class="carousel-img" >
       
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






<div style="" class="movieslistentry">
Trailers:
</div>
<div style="" class="movieslisthorizontal">


  <div class="thumb-img">
   <a href="https://youtu.be/ujjoTwPD7UU"><img src="https://in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/kavalthurai-ungal-nanban-et00112826-23-11-2020-12-13-40.jpg" data-toggle="modal" data-target="#kun"  class="innerimg"></a> 
  </div>
  <div class="thumb-img">
    <a href="https://youtu.be/7LktgvVS1ss"><img src="https://in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/thatrom-thookrom-et00300778-12-11-2020-05-56-34.jpg" data-toggle="modal" data-target="#kun"  class="innerimg"></a> 
  </div>
  <div class="thumb-img">
    <a href="https://youtu.be/EkWJEBxzYb0"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2AHEOBDcZaW0b88jLCPG7iBXCg8jXRr2N6jnEblNSrM8TKEH_" data-toggle="modal" data-target="#kun"  class="innerimg"></a> 
  </div>
  <div class="thumb-img">
    <a href="https://youtu.be/5AzCHtbmW-U"><img src="https://m.media-amazon.com/images/M/MV5BMjIxMmMxNGMtN2FkNS00NGU3LTgwNDctZTY3OGVkNzNmOTViXkEyXkFqcGdeQXVyOTk3NTc2MzE@._V1_.jpg" data-toggle="modal" data-target="#kun"  class="innerimg"></a> 
  </div>
  <div class="thumb-img">
    <a href="https://www.youtube.com/watch?v=fa_DIwRsa9o"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcT548VxmAy8QLFh56tfBTUqGg0qqU75AxX-dQ0dCP0W-fmdoDuk" data-toggle="modal" data-target="#kun"  class="innerimg"></a> 
  </div>
  <div class="thumb-img">
    <a href="https://youtu.be/7cx-KSsYcjg"><img src="https://i.pinimg.com/564x/23/f7/9f/23f79f7fd79e19fd55537e2981e7d477.jpg" data-toggle="modal" data-target="#kun"  class="innerimg"></a> 
  </div>

  

</div>
</div>








<div style="" class="movieslistentry">
Movies:
</div>
<div style="" class="movieslisthorizontal">
    <?php

while($row = mysqli_fetch_array($result)) {
?>

	<div class="thumb-img">
		<!--<img src="https://in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/kavalthurai-ungal-nanban-et00112826-23-11-2020-12-13-40.jpg" data-toggle="modal" data-target="#kun">-->

        	<form method="post" action="booking.php">
		<img src="<?php echo $row["movieurl"]; ?>" class="innerimg" style="">
    <p></p>
		<div>
 <input type="hidden" name="text" value="<?php echo $row["movietitle"]; ?>">
 <input type="hidden" name="username" value="<?php echo $c ?>">
  <input type="hidden" name="wallet" value="<?php echo $row["wallet"]; ?>">
 <button type="submit" class="seatbtn" style="">Book your seat</button>
</form>
        </div>

	</div>
	
	<?php
}
?>
 <?php
}
else{
    echo "Unknown Name";
}
?>

</div>
</div>










<div style="" class="copyrighttag"><p style="" class="copyrightptag">@copyright from Bookmyshow</p></div>

</body>
</html>