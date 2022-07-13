<?php

	$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');	
	
	if(isset($_POST['I']))
	{
		$sI=mysqli_query($db,"select firstyear.roll,firstyear.enroll,firstyear.fname, averageF.ICT,averageF.Math,averageF.Physics,averageF.Chemistry,averageF.Graphics,averageF.English
			from firstyear,averageF where firstyear.roll=averageF.roll order by firstyear.roll ASC");
	}

	if(isset($_POST['II']))
	{
		$sI=mysqli_query($db,"select firstyear.roll,firstyear.enroll,firstyear.fname, averageF.EEC,averageF.BEC,averageF.CPH,averageF.BCC,averageF.AMI,averageF.WPD,averageF.PIC
			from firstyear,averageF where firstyear.roll=averageF.roll order by firstyear.roll ASC");
	}

	if(isset($_POST['III']))
	{
		$sI=mysqli_query($db,"select secondyear.roll,secondyear.enroll,secondyear.fname, averageS.OOP,averageS.DSU,averageS.CGR,averageS.DMS,averageS.DTE
			from secondyear,averageS where secondyear.roll=averageS.roll order by secondyear.roll ASC");
	}
	if(isset($_POST['IV']))
	{
		$sI=mysqli_query($db,"select secondyear.roll,secondyear.enroll,secondyear.fname, averageS.JPR,averageS.GAD,averageS.MIC,averageS.SEN,averageS.DCC
			from secondyear,averageS where secondyear.roll=averageS.roll order by secondyear.roll ASC");
	}
	if(isset($_POST['V']))
	{
		$sI=mysqli_query($db,"select thirdyear.roll,thirdyear.enroll,thirdyear.fname, averageT.EST,averageT.AJP,averageT.OSY,averageT.STE,averageT.CSS,averageT.ITR,averageT.CPP,averageT.ACN,averageT.ADN
			from thirdyear,averageT where thirdyear.roll=averageT.roll order by thirdyear.roll ASC");
	}
	if(isset($_POST['VI']))
	{
		$sI=mysqli_query($db,"select thirdyear.roll,thirdyear.enroll,thirdyear.fname,averageT.MGT,
			averageT.WBP,averageT.PWP,averageT.ETI,averageT.MAD,averageT.EDE,averageT.CPE 
			 from thirdyear,averageT where thirdyear.roll=averageT.roll order by thirdyear.roll ASC");
	}
	


?>