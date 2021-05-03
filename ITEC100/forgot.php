<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"infoass");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="css/forgot.css">
</head>
<?php include 'files.php' ?>
<body style="background-image: url(images/forgotbg.jpg);
	background-size: cover;">
	<div class="box">
		<form action="" method="POST">
		<p><h3>Forgot your password?</h3><br>Please input the email address you used to reset the password of your account.</p><br>
		<label for="email">Email Address</label><br>
		<input type="email" id="email" name="email"><br>
		<label for="new_pass">New Password</label><br>
		<input type="password" id="new_pass" name="new_pass"><br>
		<label for="confirm_pass">Confirm Password</label><br>
		<input type="password" id="confirm_pass" name="confirm_pass"><br>
		<br><a id="back" href="Labactivity1.php">Back</a>
		<input type="submit" class="btn" name="reset" value="Done"><br><br>
	</form>
	</div>
</body>
</html>