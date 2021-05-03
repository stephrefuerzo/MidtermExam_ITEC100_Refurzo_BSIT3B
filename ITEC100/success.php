
<!DOCTYPE html>
<html>
<head>
	<title>Verification Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Success.css">
</head>
<?php include 'files.php' ?>
<body style="background-image: url(images/blackpink.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  width: 100%;
  height:600px;">	
	<div class="vbox" style="height:450px;">
	<form action="" method="post" class="login-form" autocomplete="off">
	<div>
	<center>	<?php 
                      $phpvar="300"; 
                      ?> 
                      <script>
                      function countDown(secs,elem) {
                      var element = document.getElementById(elem);
                      element.innerHTML = "Timer: "+secs+" seconds";
                      if(secs < 1) {
                      clearTimeout(timer);
                      element.innerHTML = '<h2>Ended</h2>';
                      element.innerHTML += '<a href="Labactivity1.php">Reset</a>';
                      $("#btn-submit").attr("disabled", true);
                      }
                      secs--;
                      var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
                      }
                      </script>
                      <div id="status"style="font-size:20px;color:white;"></div>
                      <script>countDown(<?php echo $phpvar; ?>,"status");</script></center>
                </div>
                <br>
    <div class="codeee" style="height:50px; "><input type = "text" class = "text" name = "coded" style="width:100%;height:50px;text-align:center;font-size:20px;"value = "<?php 
      $rand = rand(100000,999999);
      echo $rand;
    
    ?>" disabled>
</div>
	<br>
		<br>
		<label for="typed">Input Code:</label>
		<input type="text" id="code" name="code" required>

		<button type  = "submit" name = "submit">Submit</button>
	</form>
	</div>



</body>
</html>