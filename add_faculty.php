<?php
$db=mysqli_connect("localhost:3307",'root','root','system')
		or die("Connection failed");

		
		$s=$_POST['sub'];
	 
	$sql="INSERT INTO faculty_details
		  set
		  fname='".$_POST['fname']."',
		  fmobile='".$_POST['fmobile']."',
		  femail='".$_POST['femail']."',
		  fuser='".$_POST['fuser']."',
		  fpass='".$_POST['fpas']."',
		  sem='".$_POST['sem']."',
		  sub='".$s."'";
	
	$res=mysqli_query($db,$sql);
	if($res)
	{
	header("location: index.html");
	}
	else
	{
	header("location: addFaculty.html");
	}

?>