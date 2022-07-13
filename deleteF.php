<?php
	if(isset($_POST['submit']))
	{
		$n=$_POST['username'];
		//echo"$n";
		$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');

		$res=mysqli_query($db,"DELETE * from faculty_details where fuser='".$n."'");
		if($res)
		{
			header("location:viewFaculty.php");
		}
		else
		{
			echo'<script>alert("j");</script>';
		}
	}
?>