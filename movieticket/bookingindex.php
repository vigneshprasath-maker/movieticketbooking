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


?>
<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript">	 	var arr=[];var x;var elements;</script>
	<title></title>
	<style type="text/css">
		.imagebook {
			height: 20px;
			color: pink;
		}
		.section {
			display: flex;
			margin-top: 40px;
			margin-left: 50px;
		}
		.seatsection {
			margin-right: 15px;
			padding: 18px;
		}
		.fas {
			padding: 18px;
		}
	</style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>

<div  style="display: flex;justify-content: center;"><div style="margin-left: 25px;"><i class="fas fa-couch"></i> Available</div><div  style="margin-left: 25px;"><i class="fas fa-couch" style="color: green"></i> Selected</div><div  style="margin-left: 25px;"><i class="fas fa-couch" style="color: red"></i> Booked</div></div>



<form action="bookingindex.php" method="post">

	<!--A section-->
<div style="display: flex">
	<div style="flex-basis: 65%;">
	<div class="section">
	<div class="seatsection">A</div>
	<div class="image-flex">
	<a id="a1"><i class="fas fa-couch" onclick='changeImage(this);'  id="a1" name="elements"></i></a>
	<a id="a2"><i class="fas fa-couch" onclick='changeImage(this);'  id="a2" name="elements"></i></a>
	<a id="a3"><i class="fas fa-couch" onclick='changeImage(this);'  id="a3" name="elements"></i></a>
	<a id="a4"><i class="fas fa-couch" onclick='changeImage(this);'  id="a4" name="elements"></i></a>
	<a id="a5"><i class="fas fa-couch" onclick='changeImage(this);'  id="a5" name="elements"></i></a>
	<a id="a6"><i class="fas fa-couch" onclick='changeImage(this);'  id="a6" name="elements"></i></a>
	<a id="a7"><i class="fas fa-couch" onclick='changeImage(this);'  id="a7" name="elements"></i></a>
	<a id="a8"><i class="fas fa-couch" onclick='changeImage(this);'  id="a8" name="elements"></i></a>
	<a id="a9"><i class="fas fa-couch" onclick='changeImage(this);'  id="a9" name="elements"></i></a>
	<a id="a10"><i class="fas fa-couch" onclick='changeImage(this);'  id="a10" name="elements"></i></a>
</div>
</div>

	<!--B section-->
	<div class="section">
	<div class="seatsection">B</div>
	<div class="image-flex">
	<a class="b1"><i class="fas fa-couch" onclick='changeImage(this);'  id="b1" name="elements"></i></a>
	<a class="b2"><i class="fas fa-couch" onclick='changeImage(this);'  id="b2" name="elements"></i></a>
	<a class="b3"><i class="fas fa-couch" onclick='changeImage(this);'  id="b3" name="elements"></i></a>
	<a class="b4"><i class="fas fa-couch" onclick='changeImage(this);'  id="b4" name="elements"></i></a>
	<a class="b5"><i class="fas fa-couch" onclick='changeImage(this);'  id="b5" name="elements"></i></a>
	<a class="b6"><i class="fas fa-couch" onclick='changeImage(this);'  id="b6" name="elements"></i></a>
	<a class="b7"><i class="fas fa-couch" onclick='changeImage(this);'  id="b7" name="elements"></i></a>
	<a class="b8"><i class="fas fa-couch" onclick='changeImage(this);'  id="b8" name="elements"></i></a>
	<a class="b9"><i class="fas fa-couch" onclick='changeImage(this);'  id="b9" name="elements"></i></a>
	<a class="b10"><i class="fas fa-couch" onclick='changeImage(this);'  id="b10" name="elements"></i></a>
</div>
</div>

	<!--c section-->

	<div class="section">
	<div class="seatsection">C</div>
	<div class="image-flex">
	<a class="c1"><i class="fas fa-couch" onclick='changeImage(this);'  id="c1" name="elements"></i></a>
	<a class="c2"><i class="fas fa-couch" onclick='changeImage(this);'  id="c2" name="elements"></i></a>
	<a class="c3"><i class="fas fa-couch" onclick='changeImage(this);'  id="c3" name="elements"></i></a>
	<a class="c4"><i class="fas fa-couch" onclick='changeImage(this);'  id="c4" name="elements"></i></a>
	<a class="c5"><i class="fas fa-couch" onclick='changeImage(this);'  id="c5" name="elements"></i></a>
	<a class="c6"><i class="fas fa-couch" onclick='changeImage(this);'  id="c6" name="elements"></i></a>
	<a class="c7"><i class="fas fa-couch" onclick='changeImage(this);'  id="c7" name="elements"></i></a>
	<a class="c8"><i class="fas fa-couch" onclick='changeImage(this);'  id="c8" name="elements"></i></a>
	<a class="c9"><i class="fas fa-couch" onclick='changeImage(this);'  id="c9" name="elements"></i></a>
	<a class="c10"><i class="fas fa-couch" onclick='changeImage(this);'  id="c10" name="elements"></i></a>
</div>
</div>


	<!--D section-->

	<div class="section">
	<div class="seatsection">D</div>
	<div class="image-flex">
	<a class="d1"><i class="fas fa-couch" onclick='changeImage(this);'  id="d1" name="elements"></i></a>
	<a class="d2"><i class="fas fa-couch" onclick='changeImage(this);'  id="d2" name="elements"></i></a>
	<a class="d3"><i class="fas fa-couch" onclick='changeImage(this);'  id="d3" name="elements"></i></a>
	<a class="d4"><i class="fas fa-couch" onclick='changeImage(this);'  id="d4" name="elements"></i></a>
	<a class="d5"><i class="fas fa-couch" onclick='changeImage(this);'  id="d5" name="elements"></i></a>
	<a class="d6"><i class="fas fa-couch" onclick='changeImage(this);'  id="d6" name="elements"></i></a>
	<a class="d7"><i class="fas fa-couch" onclick='changeImage(this);'  id="d7" name="elements"></i></a>
	<a class="d8"><i class="fas fa-couch" onclick='changeImage(this);'  id="d8" name="elements"></i></a>
	<a class="d9"><i class="fas fa-couch" onclick='changeImage(this);'  id="d9" name="elements"></i></a>
	<a class="d10"><i class="fas fa-couch" onclick='changeImage(this);'  id="d10" name="elements"></i></a>
</div>
</div>



	<!--E section-->

	<div class="section">
	<div class="seatsection">E</div>
	<div class="image-flex">
	<a class="e1"><i class="fas fa-couch" onclick='changeImage(this);'  id="e1" name="elements"></i></a>
	<a class="e2"><i class="fas fa-couch" onclick='changeImage(this);'  id="e2" name="elements"></i></a>
	<a class="e3"><i class="fas fa-couch" onclick='changeImage(this);'  id="e3" name="elements"></i></a>
	<a class="e4"><i class="fas fa-couch" onclick='changeImage(this);'  id="e4" name="elements"></i></a>
	<a class="e5"><i class="fas fa-couch" onclick='changeImage(this);'  id="e5" name="elements"></i></a>
	<a class="e6"><i class="fas fa-couch" onclick='changeImage(this);'  id="e6" name="elements"></i></a>
	<a class="e7"><i class="fas fa-couch" onclick='changeImage(this);'  id="e7" name="elements"></i></a>
	<a class="e8"><i class="fas fa-couch" onclick='changeImage(this);'  id="e8" name="elements"></i></a>
	<a class="e9"><i class="fas fa-couch" onclick='changeImage(this);'  id="e9" name="elements"></i></a>
	<a class="e10"><i class="fas fa-couch" onclick='changeImage(this);'  id="e10" name="elements"></i></a>
</div>
</div>


	<!--F section-->

	<div class="section">
	<div class="seatsection">F</div>
	<div class="image-flex">
	<a class="f1"><i class="fas fa-couch" onclick='changeImage(this);'  id="f1" name="elements"></i></a>
	<a class="f2"><i class="fas fa-couch" onclick='changeImage(this);'  id="f2" name="elements"></i></a>
	<a class="f3"><i class="fas fa-couch" onclick='changeImage(this);'  id="f3" name="elements"></i></a>
	<a class="f4"><i class="fas fa-couch" onclick='changeImage(this);'  id="f4" name="elements"></i></a>
	<a class="f5"><i class="fas fa-couch" onclick='changeImage(this);'  id="f5" name="elements"></i></a>
	<a class="f6"><i class="fas fa-couch" onclick='changeImage(this);'  id="f6" name="elements"></i></a>
	<a class="f7"><i class="fas fa-couch" onclick='changeImage(this);'  id="f7" name="elements"></i></a>
	<a class="f8"><i class="fas fa-couch" onclick='changeImage(this);'  id="f8" name="elements"></i></a>
	<a class="f9"><i class="fas fa-couch" onclick='changeImage(this);'  id="f9" name="elements"></i></a>
	<a class="f10"><i class="fas fa-couch" onclick='changeImage(this);' id="f10" name="elements"></i></a>
</div>
</div>
</div>
<div style="
			margin-top: 40px;">

	<div style="font-size: 24px;font-weight: bold;">Soorarrai Potru (U/A) - Tamil</div>
	<div style="font-size: 16px;margin-top: 10px;">Tamil | 2D | U/A</div>
	<hr>

	<h5 style="color: grey;">THEATERS</h5>
	<div style="margin-top: 10px;">Sangam Cinemas 4K RGB Laser Dolby Atmos |
D-Lounge 4K RGB Laser</div>
<hr style="margin-top: 20px;">
<h5 style="margin-top: 20px;color: grey;">SHOW TIME</h5>
<div>Sat, 21 Nov 07:30 PM</div>
<hr style="margin-top: 20px;">
<div style="display: flex;justify-content: space-between;margin-top: 20px;">
	<div><span id="noseats">0</span> seats</div>
	<div>₹ <span id="sum">0</span></div>
</div>

<h5 style="margin-top: 20px;color: grey;">THE SELECTED SEATS ARE:</h5>
<div id="seatno"></div>
<div style="text-align: center;margin-top: 20px;"><button style="width: 100%;height: 50px;background: orange;color: white;border:1px solid gold;" name="submit">Continue</button></div>
<div style="text-align: center;margin-top: 20px;"><button style="width: 100%;height: 50px;border:1px solid grey;">Cancel</button></div>
</div>
</div>

</form>
<script type="text/javascript">

	var count=0;
	var total=0;

	 function changeImage(a) {
	 	var id=a.id;
	 	if((document.getElementById(id).style.color!="red")){
	 		if(document.getElementById(id).style.color!="green"){
	 	count++;
	 	total=total+90;
	 	document.getElementById(id).style.color="green";
	 	document.getElementById('noseats').innerHTML=count;
	 	document.getElementById('sum').innerHTML=total;
	 	document.getElementById('seatno').innerHTML+=id + ",";
	 	elements=document.getElementById(a.id);
	 	elements.setAttribute("name", "horse[]"); 
	 	arr.push(a.id);
	 	var x=arr.join(',');

	 }

	 }

    }
    console.log(arr);

var myJSON = JSON.stringify(arr);
</script>
<script type="text/javascript">
	$.ajax({ 
       type: "POST", 
       url: "booking.php", 
       data: { kvcArray : arrayfromjs}, 
       success: function() { 
              alert("Success"); 
        } 
}); 
</script>
<?php

$sql_query = "SELECT * FROM ticket WHERE status='booked'" ;  
                          $result = mysqli_query($conn, $sql_query);  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               	$seatss=$row["seats"];
                                    echo "<script>
	var id=$seatss;
	document.getElementById('$seatss').style.color='red';
	document.getElementById('$seatss').style.cursor='not-allowed';
	document.getElementById('$seatss').disabled='true';
	</script>"; 
                               }  
                          }  
?>
</body>
</html>