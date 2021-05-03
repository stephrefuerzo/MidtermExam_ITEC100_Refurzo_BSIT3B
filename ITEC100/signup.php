<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"infoass");

?>

<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1"> 
<style>
body{
  background: url(images/blink.jpg);
  background-repeat: no-repeat;
  background-size: cover;
 }
.signupbox{
  width:400px;
	height:600px;
	background: rgba(0,0,0,.4);
	color:#fff;
	top:50%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing: border-box;
	padding: 40px 30px;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
}
.signupbox input{
	width:100%;
	margin-bottom:10px;
}
.signupbox p{
	margin:0;
	padding:0;
	font-weight:bold;
    text-align:left;
}
.signupbox input[type="text"], input[type="password"], input[type="email"]{
	border:none;
	border-bottom: 1px solid #fff;
	background:transparent;
	outline:none;
	color:#fff;
	font-size:16px;
	padding:10px 0;
	transition: -5s;
	letter-spacing: 1px;
} 

.button{
  border: none;
  border-radius: 2px;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  float: left;
  margin-bottom: 20px;
  cursor: pointer;
  transition-duration: 0.4s;
} 
.button:hover{
     background-color: #333333;
      color: white;
      text-decoration-line: 
      button: disabled;
}

button[type="submit"] {
  font-size: .9em;
  color: black;
  outline: none;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
  border-radius: 5px;

}

button[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #333333;
  color:white;
}
</style>
</head>


<body>


<div class="signupbox">

<center><h1 style="margin-top: 0px;">Sign up Form</h1>
</center>
<a href="Labactivity1.php"><button class="button" style="width: 50%;">Log in</button></a>
<a href="signup.php"><button class="button" style="width: 50%; background-color: #EE82EE;color: black;">Sign up</button></a>

  <form action="" method="post" name="Labactivity1.php" autocomplete="off"> 
  <p>Username</p>
 <input type = "text" placeholder = "Enter username" name="username" required = ""/>
  <span class="error"></span>
  <br><br>
  <p>Password</p>
<input type="password" placeholder = "Enter password" name ="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = "">
  <span class="error"></span>
<br><br>
 <p>Confirm Password</p>
<input type="password" placeholder = "Re-enter password" name ="cpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = "">
  <span class="error"></span><br><br>
 <p>Email</p>
<input type="email" placeholder = "Enter email" name ="email" required>
  <span class="error"></span>


 <br>
  <button class = "submit" type="submit" value="Sign Up" name = "submit">Sign Up</button>

</form>
</div>

    <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var y = document.getElementById("cpass");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>
<?php

if(isset($_POST['submit'])){

$user_name=$_POST['username'];
$user_pass=$_POST['password'];
$user_email=$_POST['email'];


$stmt="INSERT INTO user (username,password,email)VALUES('$user_name','$user_pass','$user_email')";
if(mysqli_query($link,$stmt)){
	header("Location: Labactivity1.php");
}
else{
	echo "fail";
}
}
?>

</body>
</html>
