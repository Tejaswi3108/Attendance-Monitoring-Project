<?php

	session_start();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="loginPage.css">
</head>
<body style="background-color:Lavender;">

		<div class="header">
			<ul class="nav">
				<li><a href="facultyPage.html"  >Home</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;" >Make Attendence</a></li>
				<li><a href="viewA1.php">View Attendence</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<form action="fetch1.php" method="POST">
		<div class="login-box">
		<h3 style="color: red;">Enter Today's Lecture no:</h3><br><input type="text" name="lecture">
		<input type="submit" name="su" value="GO">
	</div>
	</form>
</body>
</html>
