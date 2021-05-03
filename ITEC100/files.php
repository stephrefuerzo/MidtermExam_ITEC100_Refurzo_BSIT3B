<?php session_start();
$error = NULL;

//For the LOGIN
if(isset($_POST['login'])){
$u=$_POST['username'];
$p=$_POST['password'];
$log = "Login";

$link = NEW MySQLi('Localhost','root','','infoass');

$tb1="SELECT * FROM `admin` WHERE `user` = '".$u."' and `pass` = '".$p."'";
if($result=mysqli_query($link,$tb1)){
  $check = mysqli_num_rows($result);
}
if($check>0){
  header ('Location: event_log.php');
  echo '<script> alert("Login Successful")</script>';
}

$tb2="SELECT * FROM `user` WHERE `username` = '".$u."' and `password` = '".$p."'";

if($result1 =mysqli_query($link,$tb2)){
  $check1 = mysqli_num_rows($result1);
  $row = mysqli_fetch_array($result1);
}
if($check1>0){
  $query = "INSERT INTO activity_log(user,activity) values ('$u','$log')";
  $resultset = mysqli_query($link, $query);
  header ('Location: success.php');
  $_SESSION['user'] = $u;
  $_SESSION['pass'] = $p;
  
}

else{
  echo '<script>alert("Login Failed")</script>'; 
}
}
?>
<!--For the LOGOUT-->
<?php
if(isset($_POST['logout']))
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "infoass";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $y = $_SESSION['user'];
  $log = "Logout";
    
  $query = "INSERT INTO activity_log(user, activity) values ('$y','$log')";

  $result = mysqli_query($connect, $query);

  if($result)
  {
    header('Location: Labactivity1.php');
  }
  else
  {
    echo "fail";

  }

  mysqli_close($connect);

}
?>
<!--For the RESET PASSWORD-->
<?php
if(isset($_POST['reset'])){
  $email = $_POST['email'];
  $conf = $_POST['cpwd'];
  $log = "Reset Password";
 
$table2= "UPDATE user set password = '$_POST[new_pass]' where email = '$email'";

if(mysqli_query($link,$table2)){
  $user = $_SESSION['user'];
  $query = "INSERT INTO activity_log(user,activity) values ('$user','$log')";
  $resultset = mysqli_query($link, $query);
  header ('Location: Labactivity1.php');
  echo '<script> alert("Change Password Successfully")</script>';
}
else{
  echo '<script>alert("Login Failed")</script>'; 
}

}
?>
<!--Authenticate-->

<?php
if(isset($_POST['submit']))
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "infoass";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $y = $_SESSION['user'];
  $x = $_SESSION['pass'];
  $code = $_POST['code'];
    
  $query = "INSERT INTO authenticate(user, pass, vkey) values ('$y','$x','$code')";

  $result = mysqli_query($connect, $query);

  if($result)
  {
    header('Location: Logout.php');
  }
  else
  {
    echo "fail";

  }

  mysqli_close($connect);

}
?>





