<?php
		
	include("session.php");

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="ord.css">
</head>
<body style="background-color:Lavender;">

		<div class="header">
			<ul class="nav">
				<li><a href="facultyPage.html">Home</a></li>
				<li><a href="makeA.php" >Make Attendence</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">View Attendence</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
	
		<div class="display">
			<table class="table" cellspacing="2" border="1" >
		<tr>
			<th colspan="5"><h2>Student Record</h2></th>
		</tr>
		<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		<th>Total Lecture</th>
		<th><?php echo$_SESSION['subb'];?></th>
		</tr>
	<?php

		if($s=="I" or $s=="II")
		{
	    $r1="SELECT firstyear.roll ,firstyear.enroll,firstyear.fname,firstdemo.$sub
	     FROM firstyear ,firstdemo WHERE firstyear.roll = firstdemo.roll ORDER BY firstyear.roll ASC";
	    $res=mysqli_query($db,$r1);
		}

		if($s=="III" or $s=="IV")
		{
		$r1="SELECT secondyear.roll ,secondyear.enroll,secondyear.fname,demosecond.$sub
	     FROM secondyear ,demosecond WHERE secondyear.roll = demosecond.roll ORDER BY secondyear.roll ASC";
	    $res=mysqli_query($db,$r1);
		}

		if($s=="V" or $s=="VI")
		{
			$r1="SELECT thirdyear.roll ,thirdyear.enroll,thirdyear.fname,demothird.$sub
	     FROM thirdyear ,demothird WHERE thirdyear.roll = demothird.roll order by thirdyear.roll asc";
		$res=mysqli_query($db,$r1);
		}

		while($rows=mysqli_fetch_assoc($res))
	{
		?>
		<tr>
			<td><?php echo" {$rows['roll']}";?></td>
			<td><?php echo "{$rows['enroll']}";?></td>
			<td><?php echo "{$rows['fname']}";?></td>
			<td><?php echo "$l";?></td>
			<td><?php echo "{$rows[$sub]}";?></td>
		</tr>
		<?php
		}
		?>

	</table>
</body>
</html>