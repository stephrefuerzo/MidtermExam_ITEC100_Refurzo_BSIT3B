<!DOCTYPE html>
<html>
<head>
	<title>Event_Log</title>
	<link rel="stylesheet" type="text/css" href="css/event.css">
</head>

<body style="background-image: url(images/event_bg.png);background-size: cover; background-repeat: no-repeat;">


	<center>
	<div class="log">
		<h2>Event Log</h2>
		<form action="Labactivity1.php" method="POST">
		<table>
			<tr>
				<th>User ID</th>
				<th>Username</th>
				<th>Activity</th>
				<th>Time</th>
			</tr>
			<?php  
		$con = mysqli_connect('localhost','root','','infoass');
		$query = ("SELECT * FROM activity_log");
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)){
		?>
		<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['user']; ?></td>
		<td><?php echo $row['activity']; ?></td>
		<td><?php echo $row['time']; ?></td>
		
		</tr>
		<?php
		}
?>
		</table>
			<input type="submit" class="back" name="back" value="Back">
	</form>
	</div>
</center>

</body>
</html>