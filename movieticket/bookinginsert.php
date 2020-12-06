<?php
$moviename=$_POST['moviename'];
$username=$_POST['username'];
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
$count=0;

$sql2="SELECT * FROM login where username = '".$username."'";
$res = mysqli_query($conn,$sql2);
$row = mysqli_fetch_assoc($res);
echo $row["wallet"];
$fc=$row["wallet"];
echo $fc;



if(isset($_POST['submit'])){
      if(!empty($_POST['checkArr'])){
      foreach($_POST['checkArr'] as $checked){

        echo $checked."</br>";
        $count=$count+90;
      }
    }
  }

$wallet=$fc-$count;
echo $wallet;
if(isset($_POST['submit'])){
      if(!empty($_POST['checkArr'])){
      foreach($_POST['checkArr'] as $checked){
      	$sql[]=$checked;
        echo $checked."</br>";
        $query ="INSERT INTO ticket (name, seats, status, fare) VALUES ('".$moviename."','".$checked."','booked','90' )";
        mysqli_query($conn, $query);
        $update = "UPDATE login SET wallet = '".$wallet."' WHERE username='".$username."'";
        mysqli_query($conn, $update);
         header("location: ./thanks.php");
      }
    }
  }
echo $count;
echo $username;


?>