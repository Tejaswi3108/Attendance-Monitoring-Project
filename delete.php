<?php
	
	 $db=mysqli_connect("localhost:3307",'root','root','system')
		or die("Connection failed");
	 
		
	if(isset($_POST['deleteF']))
	{
		$d=mysqli_query($db,"TRUNCATE TABLE firstyear");
		$d1=mysqli_query($db,"TRUNCATE TABLE firstdemo");
		$d2=mysqli_query($db,"TRUNCATE TABLE averageF");
		if($d and $d1 and $d2)
		{
			header("location:first.php");
		}
	}

	if(isset($_POST['deleteS']))
	{
		$d=mysqli_query($db,"TRUNCATE TABLE secondyear");
		$d1=mysqli_query($db,"TRUNCATE TABLE demosecond");
		$d2=mysqli_query($db,"TRUNCATE TABLE averageS");
		if($d and $d1 and $d2)
		{
			header("location:second.php");
		}
	}
	if(isset($_POST['deleteT']))
	{
		$d=mysqli_query($db,"TRUNCATE TABLE thirdyear");
		$d1=mysqli_query($db,"TRUNCATE TABLE demothird");
		$d2=mysqli_query($db,"TRUNCATE TABLE averageT");
		if($d and $d1 and $d2)
		{
			header("location:third.php");
		}
	}
?>