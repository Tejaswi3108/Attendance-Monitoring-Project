<html>
<head>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="ord.css">
<style>
	body{
		background-color: ;

	}
</style>
</head>
<body>

		<div class="header">
			<ul class="nav">
				<li><a href="adminPage.html">Home</a></li>
				<li><a href="addFaculty.html" >Add Faculty</a></li>
				<li><a href="#" style="color:#1c8adb;font-weight:bold;">View Faculty</a></li>
				<li><a href="ViewAttend.php">View Attendance</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
			<div class="display">
		<table class="table" cellspacing="2" border="1" align="center" >
	<tr>
		<th colspan="7"><h2>Faculty Details</h2></th>
		</tr>
	<tr>
		<th>Name</th>
		<th>Username</th>
		<th>Password</th>
		<th>Mobile No</th>
		<th>Semister</th>
		<th>Subject</th>
		<th>Email ID</th>
		
	</tr>
	
	
	<?php
		$db=mysqli_connect("localhost:3307",'root','root','system')
		or die("Connection failed");
		$sqll="select * from faculty_details";
	    $res=mysqli_query($db,$sqll);
	
		while($rows=mysqli_fetch_assoc($res))
		{
			
	?>
		<tr>
			<td><?php echo" {$rows['fname']}";?></td>
			<td><?php echo "{$rows['fuser']}";?></td>
			<td><?php echo "{$rows['fpass']}";?></td>
			<td><?php echo "{$rows['fmobile']}";?></td>
			<td><?php echo "{$rows['sem']}";?></td>
			<td><?php echo "{$rows['sub']}";?></td>
			<td><?php echo "{$rows['femail']}";?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>