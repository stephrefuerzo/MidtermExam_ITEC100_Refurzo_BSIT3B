

<!DOCTYPE HTML>  
<html>
<head>
  <title>Login</title>
<style>

body{
	background: url(images/blackpink.png);
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	width: 100%;
	height:600px;
	
 }

 img{
 	max-width:100%;
 }
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

}

.loginbox{
  background-color: pink;
  width:400px;
	height:500px;
  opacity: 2.8;
	color:black;
	top:50%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing: border-box;
	padding: 40px 30px;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
}
.loginbox p{
	margin:0;
	padding:0;
	font-weight:bold;
    text-align:left;
    color: black;
 }
.loginbox input{
	width:100%;
	margin-bottom:10px;
}
.loginbox input[type="text"], input[type="password"]{
	border:none;
	background:transparent;
  background-color: white;
	outline:none;
	color: black;
	font-size:14px;
	padding:7px 0;
	transition: -5s;
	letter-spacing: 1px;
  border-radius: 10px;
  text-indent: 5px;
} 
.checkbox-inline{
 color: black;
	font-size:14px;
	transition: -5s;
	letter-spacing: 1px;
	position: absolute;
	margin-left: 10px;
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
  margin-top: 0;

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
  margin-bottom: 30px;
  cursor: pointer;
  transition-duration: 0.4s;
} 
.button:hover{
     background-color: #333333;
      color: white;
      text-decoration-line: 
      button: disabled;
}
.log{
  width: 250px;
  height: 50px;
  float:right;
  background-color: gray;
  border:1px solid black;
  margin-right: 2%;
  margin-top: 40%;
}
#log{
  text-decoration: none;
  color: #fff;
  text-align: center;
  font-size: 20px;
  font-weight: bold; 
}

</style>
</head>
<?php include 'files.php' ?>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:150px;height: 60px;margin-top:400px;margin-left:600px; background-color:#dc4454;border:2px solid #fff;font-size: 20px; color:#fff;"><b>Login</b></button>

<button class="log" name="log"><a id="log" href="event_log.php">Activity</a></button>

<div id="id01" class="modal">
  
<div class="loginbox">
<center><h1 style="margin-top: -10px; color:black;">Log in </h1></center>

<a href="Labactivity1.php"><button class="button" style="width: 50%; background-color: #EE82EE;color: black;">Log in</button></a>
<a href="signup.php"><button class="button" style="width: 50%;">Sign up</button></a>

  <form action="" method="post" autocomplete="off" name="loginpage"> 
  <p>Username</p>
 <input type = "text" placeholder = "Enter username" name="username" required="">
  <span class="error"></span>
  <br><br>
  <p>Password</p>
<input type="password" placeholder = "Enter password" name="password" id="pw"required="">
<label class="checkbox-inline"><input type="checkbox" style="width: 20px;"onclick="myFunction()">Show Password</label>
  <span class="error"></span><br>
 <br><br>
<p><center>Forgot <a href="forgot.php" style="color:blue;">password?</a></center></p>
 
   <button type  = "submit" name = "login">Log in</button>
  <br>
  <p class="message"><center>Not registered? <a href="signup.php" style="color:red;">Create an account</a></center></p>


</form>
</div>
</div>


<script>
	function myFunction(){
		var x = document.getElementById("pw");
		if(x.type === "password"){
			x.type = "text";
		} else{
			x.type = "password";
		}
	}
</script>

<?php
echo $error;
?>

</body>
</html>
