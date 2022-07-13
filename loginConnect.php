
<?php
	session_start();
	$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');	
	session_start();
	$msg="Enter username";
	$u=$_POST["username"];
	$p=$_POST["password"];
	$select=$_POST["type"];
	
	$_SESSION['user']=$u;
	$_SESSION['pass']=$p;
	
	if($select=="admin")	
	{
		#checking admin login details

		$res=mysqli_query($db,"select * from admin where user='$u' and pass='$p' ");
		$count=mysqli_num_rows($res);
		if($count==1)
		{
		header("location:adminPage.html");
		}
 
		else
		{
			$msg="Invalid username $ password";
			header("location: loginPage.html");
		}
	}
	
	elseif ($select=="faculty") 
	{
		#checking faculty login details

		$res=mysqli_query($db,"select * from faculty_details where fuser='$u' and fpass='$p' ");
		$count=mysqli_num_rows($res);
		if($count==1)
		{
		header("location: facultyPage.html");
		}
 
		else
		{
			header("location: loginPage.html");
		}
	}
	
	
	else
	{
		#checking clerk login details
		$res=mysqli_query($db,"select * from clerk_login where username='$u' and password='$p' ");
		$count=mysqli_num_rows($res);
		if($count==1)
		{
		header("location: clerkPage.html");
		}
 
		else
		{
			header("location: loginPage.html");
		}
		
	}
	
?>