<?php
	session_start();
	$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');	
	
	$_SESSION['l']=$_POST['lecture'];

	$sql="update faculty_details set lectu='".$_SESSION['l']."' where fuser='".$_SESSION['user']."'";
	$res=mysqli_query($db,$sql);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<style type="text/css">
.login-box input[type="submit"]
{
    position:absolute;
	left:68px;
	top:40%;
	border: none;
    outline: none;
    height: 40px;
	width: 60%;
    background: #1c8adb;
    font-weight: bold;
    color: #fff;
    font-family: rockwell;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #7e9ea3;
    color: #000;
}
.login-box{
    width: 320px;
    height: 320px;
    background: #e6f3ff;
    color: #fff;
    top: 60%;
    left: 53%;
    position: fixed;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
	 
	
}
</style>
</head>
<body>

		<div class="header">
			<ul class="nav">
				<li><a href="facultyPage.html"  >Home</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;" >Make Attendence</a></li>
				<li><a href="viewA1.php">View Attendence</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<form action="fetch.php" method="POST">
			<div class="login-box">
		
		<input type="submit" name="sub" value="Start">
	</div>
	</form>
		<img src="i.jpg" width="100%" height="100%">
</body>
</html>
