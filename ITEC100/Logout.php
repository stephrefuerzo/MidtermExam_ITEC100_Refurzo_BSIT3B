<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"infoass");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Log Out</title>
<style>
body{
  background: url(images/blink.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  width: 100%;
  height:600px;
  
 }
 button{
  width:150px;
  height: 60px;
  margin-top:400px;
  margin-left:600px; 
  background-color: #FE7F9C;
  border:2px solid gray;
  font-size: 20px;
  color: black;
 }
</style>
</head>
<?php include 'files.php' ?>
<body>
  <div class="login-page">
  <div class="form">
 
    <form action="" method="POST">
      <button type  = "submit" name = "logout">Logout</button>
    </form>
  </div>
</div>



</body>
</html>