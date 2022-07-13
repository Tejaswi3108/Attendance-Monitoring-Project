<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="addFaculty.css">
<link rel="stylesheet" type="text/css" href="loginPage.css">
<style>
	
	</style>
</head>
<body>
	
		<div class="header">
			<ul class="nav">
				<li><a href="adminPage.html">Home</a></li>
				<li><a href="addFaculty.html">Add Faculty</a></li>
				<li><a href="#"style="color:#1c8adb;font-weight:bold;">Delete Faculty</a></li>
				<li><a href="viewFaculty.php">View Faculty</a></li>
				<li><a href="viewAttend.php">View Attendance</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="login-box">
		
			<img src="avatar.png" class="avatar">
			<h1>Remove Faculty</h1><br><br>
            
		<form action=" " method="post">
            
			<p>Enter username</p>
            <input type="text" name="username"  required>
			<input type="submit" name="submit" value="Remove"> 
				
        </form>
        
    </div>
<?php
	if(isset($_POST['submit']))
	{
		$n=$_POST['username'];
		echo"$n";
		$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');

		$res=mysqli_query($db,"DELETE  from faculty_details where fuser='".$n."'");
		if($res)
		{
			header("location:viewFaculty.php");
		}
		else
		{
			echo'<script>alert("Username does not exists");</script>';
		}
	}
?>
</body>
</html>