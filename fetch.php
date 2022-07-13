<?php
include("configg.php");
?>	
<html>
<head>
	<link rel="stylesheet" type="text/css" href="adminnavigation.css">
	<link rel="stylesheet" type="text/css" href="ord.css">
</head>
<body>
	
		<div class="header">

			<ul class="nav">
				<li><a href="#">Home</a></li>
				<li><a href="makeA.php" style="color:#1c8adb;font-weight:bold;" >Make Attendence</a></li>
				<li><a href="viewA1.php">View Attendence</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<img src="mm.jpg" width="100%" height="100%"><br><br><br><br>
		

	<form action="" method="post">

	<h3 align="center">Total Lecture <input type="text" value="<?php echo $lectt;?>" name="le"disabled></h3>

	<div class="display">
		<table class="table" cellspacing="2" border="1" >
	<tr>
		<th colspan="4"><h2>Attendance for <?php echo$sub;?></h2></th>
		</tr>
	<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		<th>Status</th>
		
	</tr>
<?php

		if($row['sem']=="I" or $row['sem']=="II")
	  {
		
		
		$sqll="select roll,enroll,fname from firstyear";
	    $res=mysqli_query($db,$sqll);
		$count=0;
		while($rows=mysqli_fetch_assoc($res))
		{
			$r_no=$rows['roll'];
		?>

			<tr>
				<td><?php echo "{$rows['roll']}";?></td>
				<td><?php echo "{$rows['enroll']}";?></td>
				<td><?php echo "{$rows['fname']}";?></td>
				<td><input type="checkbox" value="<?php echo$rows['roll'];?>" name="c[]">Present</td>
			</tr>
			
			
		<?php
		}
       echo"<input type='submit' value='Submit' name='first' style='position:absolute;left:90%;top:1%; border: none;outline: none;height: 40px;width: 150px;background: #143D59;color: #fff;font-size: 18px;border-radius: 20px;'>";


	}

		if($row['sem']=="V" or $row['sem']=="VI")
	 	{
		
		$sqll="select roll,enroll,fname from thirdyear";
	    $res=mysqli_query($db,$sqll);
	
		while($rows=mysqli_fetch_assoc($res))
		{
			
			?>
				<tr>
					<td><?php echo" {$rows['roll']}";?></td>
					<td><?php echo "{$rows['enroll']}";?></td>
					<td><?php echo "{$rows['fname']}";?></td>
					<td><input type="checkbox" value="<?php echo$rows['roll'];?>" name="c[]">Present</td>
				</tr>
		<?php
		}
		    echo"<input type='submit' value='Submit' name='third' style='position:absolute;left:90%;top:2px; border: none;outline: none;height: 40px;width: 150px;background: #143D59;color: #fff;font-size: 18px;border-radius: 20px;'>";
	}

	if($row['sem']=="III" or $row['sem']=="IV")
	 {
	 	$sqll="select roll,enroll,fname from secondyear";
	    $res=mysqli_query($db,$sqll);

	
	
		while($rows=mysqli_fetch_assoc($res))
		{
			
	?>
		<tr>
			<td><?php echo" {$rows['roll']}";?></td>
			<td><?php echo "{$rows['enroll']}";?></td>
			<td><?php echo "{$rows['fname']}";?></td>
			<td><input type="checkbox" value="<?php echo$rows['roll'];?>" name="c[]">Present</td>
		</tr>
		<?php
		}
		 echo"<input type='submit' value='Submit' name='second' style='position:absolute;left:90%;top:2px; border: none;outline: none;height: 40px;width: 150px;background: #143D59;color: #fff;font-size: 18px;border-radius: 20px;'>";
	}
?>

</form>
</table>

</body>
</html>