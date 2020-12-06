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
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title></title>
  <style type="text/css">
    
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');



  </style>
  <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});
  </script>
</head>
<body class="loginbody">

<div class="logincontainer" id="container">
  
  <div class="form-container sign-in-container">
    <form method="post" action="movielist.php" class="loginform">
      <h1>Login</h1>

      
      <br>
      <input type="text" name="username" placeholder="UserName" class="logininput">
      <input type="password" name="password" placeholder="Password" class="logininput">
      <br>
      <input type="submit" name="submit1" value="submit" style="background: #FF4B2B" class="logininput">
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      
      <div class="overlay-panel overlay-right">
        <img src="https://www.nextbigbrand.in/wp-content/uploads/2019/07/bookmyshow.png" class="loginimg">
        
        
      </div>
    </div>
  </div>
</div>


</body>
</html>