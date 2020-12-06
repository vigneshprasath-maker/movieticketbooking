
<?php
$username=$_POST['username'];
$moviename=$_POST['text'];
$wallet=$_POST['wallet'];
$host = "localhost";
$user = "root";
$pass = "";
$db = "movieticket";
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

$moviename=$_POST['text'];
$result = mysqli_query($conn,"SELECT * FROM movies WHERE movietitle='".$moviename."'");




?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
<?php
if (mysqli_num_rows($result) > 0) {
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript">	 	var arr=[];var x;var elements;</script>
	<title></title>
	<style type="text/css">
		
		a {
			padding: 20px;
		}
		
	</style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>





<form action="bookinginsert.php" method="post">

	<!--A section-->
<div  class="disflex">
	<div  class="flex-bas">
	<div class="section">
	<div class="seatsection">A</div>
	<div class="image-flex">
	<a class="a1"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a1" name="checkArr[]" value="a1"></input></a>
	<a class="a2"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a2" name="checkArr[]" value="a2"></input></a>
	<a class="a3"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a3" name="checkArr[]" value="a3"></input></a>
	<a class="a4"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a4" name="checkArr[]" value="a4"></input></a>
	<a class="a5"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a5" name="checkArr[]" value="a5"></input></a>
	<a class="a6"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a6" name="checkArr[]" value="a6"></input></a>
	<a class="a7"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a7" name="checkArr[]" value="a7"></input></a>
	<a class="a8"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a8" name="checkArr[]" value="a8"></input></a>
	<a class="a9"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a9" name="checkArr[]" value="a9"></input></a>
	<a class="a10"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="a10" name="checkArr[]" value="a10"></input></a>
</div>
</div>

	<!--B section-->
	<div class="section">
	<div class="seatsection">B</div>
	<div class="image-flex">
	<a class="b1"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b1" name="checkArr[]" value="b1"></input></a>
	<a class="b2"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b2" name="checkArr[]" value="b2"></input></a>
	<a class="b3"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b3" name="checkArr[]" value="b3"></input></a>
	<a class="b4"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b4" name="checkArr[]" value="b4"></input></a>
	<a class="b5"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b5" name="checkArr[]" value="b5"></input></a>
	<a class="b6"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b6" name="checkArr[]" value="b6"></input></a>
	<a class="b7"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b7" name="checkArr[]" value="b7"></input></a>
	<a class="b8"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b8" name="checkArr[]" value="b8"></input></a>
	<a class="b9"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b9" name="checkArr[]" value="b9"></input></a>
	<a class="b10"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="b10" name="checkArr[]" value="b10"></input></a>
</div>
</div>

	<!--c section-->

	<div class="section">
	<div class="seatsection">C</div>
	<div class="image-flex">
	<a class="c1"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c1" name="checkArr[]" value="c1" ></input></a>
	<a class="c2"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c2" name="checkArr[]" value="c2" ></input></a>
	<a class="c3"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c3" name="checkArr[]" value="c3" ></input></a>
	<a class="c4"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c4" name="checkArr[]" value="c4" ></input></a>
	<a class="c5"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c5" name="checkArr[]" value="c5" ></input></a>
	<a class="c6"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c6" name="checkArr[]" value="c6" ></input></a>
	<a class="c7"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c7" name="checkArr[]" value="c7" ></input></a>
	<a class="c8"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c8" name="checkArr[]" value="c8" ></input></a>
	<a class="c9"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c9" name="checkArr[]" value="c9"></input></a>
	<a class="c10"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="c10" name="checkArr[]" value="c10"></input></a>
</div>
</div>


	<!--D section-->

	<div class="section">
	<div class="seatsection">D</div>
	<div class="image-flex">
	<a class="d1"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d1" name="checkArr[]" value="d1"></input></a>
	<a class="d2"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d2" name="checkArr[]" value="d2"></input></a>
	<a class="d3"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d3" name="checkArr[]" value="d3"></input></a>
	<a class="d4"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d4" name="checkArr[]" value="d4"></input></a>
	<a class="d5"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d5" name="checkArr[]" value="d5"></input></a>
	<a class="d6"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d6" name="checkArr[]" value="d6"></input></a>
	<a class="d7"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d7" name="checkArr[]" value="d7"></input></a>
	<a class="d8"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d8" name="checkArr[]" value="d8"></input></a>
	<a class="d9"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d9" name="checkArr[]" value="d9"></input></a>
	<a class="d10"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="d10" name="checkArr[]" value="d10"></input></a>
</div>
</div>



	<!--E section-->

	<div class="section">
	<div class="seatsection">E</div>
	<div class="image-flex">
	<a class="e1"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e1" name="checkArr[]" value="e1"></input></a>
	<a class="e2"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e2" name="checkArr[]" value="e2"></input></a>
	<a class="e3"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e3" name="checkArr[]" value="e3"></input></a>
	<a class="e4"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e4" name="checkArr[]" value="e4"></input></a>
	<a class="e5"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e5" name="checkArr[]" value="e5"></input></a>
	<a class="e6"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e6" name="checkArr[]" value="e6"></input></a>
	<a class="e7"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e7" name="checkArr[]" value="e7"></input></a>
	<a class="e8"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e8" name="checkArr[]" value="e8"></input></a>
	<a class="e9"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e9" name="checkArr[]" value="e9"></input></a>
	<a class="e10"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="e10" name="checkArr[]" value="e10"></input></a>
</div>
</div>


	<!--F section-->

	<div class="section">
	<div class="seatsection">F</div>
	<div class="image-flex">
	<a class="f1"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f1" name="checkArr[]" value="f1"></input></a>
	<a class="f2"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f2" name="checkArr[]" value="f2"></input></a>
	<a class="f3"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f3" name="checkArr[]" value="f3"></input></a>
	<a class="f4"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f4" name="checkArr[]" value="f4"></input></a>
	<a class="f5"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f5" name="checkArr[]" value="f5"></input></a>
	<a class="f6"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f6" name="checkArr[]" value="f6"></input></a>
	<a class="f7"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f7" name="checkArr[]" value="f7"></input></a>
	<a class="f8"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f8" name="checkArr[]" value="f8"></input></a>
	<a class="f9"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);'  id="f9" name="checkArr[]" value="f9"></input></a>
	<a class="f10"><input type="checkbox"  class="fas fa-couch" onclick='changeImage(this);' id="f10" name="checkArr[]" value="f10"></input></a>
	<input type="hidden" name="moviename" value="<?php echo $moviename;?>">
	<input type="hidden" name="username" value="<?php echo $username?>">
	<input type="hidden" name="wallet" value="<?php echo $wallet?>">

</div>
</div>

<div class="labellisting"  style=""><div class="mar25" style=""><i class="fas fa-couch" ></i> Available</div><div class="mar25"  ><i class="fas fa-couch"  class="green" style="color: green"></i> Selected</div><div class="mar25"><i class="fas fa-couch"  class="red" style="color: red"></i> Booked</div></div>
</div>

<div class="mar10">
			<?php $name_mov=$moviename;?>
			<?php

while($row = mysqli_fetch_array($result)) {
?>

    <div ><b class="font24" ><?php echo $row["movietitle"]; ?></b></div>


	<div class="mar10" class="font16" ><?php echo $row["shortstory"]; ?></div>
	<hr>
<h5  class="grey">DIRECTOR</h5>
	<div class="mar10"><?php echo $row["director"]; ?></div>
<hr class="mar20">
	<h5 class="grey">PRODUCER</h5>
	<div class="mar10"><?php echo $row["producer"]; ?></div>
<hr class="mar20">
<h5 class="grey mar20">CAST</h5>
<div><?php echo $row["cast"]; ?></div>
<hr class="mar20">
<div class="mar20 seatsec">
	<div><span id="noseats">0</span> seats</div>
	<div>₹ <span id="sum">0</span></div>
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
<h5 class="mar20 grey">THE SELECTED SEATS ARE:</h5>
<div id="seatno"></div>
<div  class="aligncenter mar20"><button class="conbtn"  name="submit" type="submit">Continue</button></div>
<div  class="aligncenter mar20"><button class="canbtn" style="">Cancel</button></div>
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

	 	arr.push(a.id);

	 }

	 }

    }
    console.log(arr);

var myJSON = JSON.stringify(arr);
</script>



<?php
$moviename=$_POST['text'];
$sql_query = "SELECT * FROM ticket WHERE name='".$moviename."' and status='booked'" ;  
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