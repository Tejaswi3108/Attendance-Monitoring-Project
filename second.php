<html>
<head>

<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="ord.css">
<script src="validate.js"></script>
</head>

<body>
      
		<div class="header">
			<ul class="nav">
				<li><a href="clerkPage.html" >Home</a></li>
				<li><a href="first.php" >First Year</a></li>
				<li><a href="#" style="color:#1c8adb;;font-weight:bold;">Second Year</a></li>
				<li><a href="third.php">Third Year</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>


<form action="delete.php" method="post">
<input type="submit" name="deleteS" value="Delete All" style="position: absolute; top:20px; left: 1100px; border: none;outline: none;height: 40px;width: 150px;background: #143D59;color: #fff;font-size: 18px;border-radius: 20px;"></li>
</form>

<form action="" method="POST">
<div class="record">
			<div class="data">
				<div class="roll">
					<p style=" left: 3%;">Roll no</p> 
					<input type="text" name="roll" required>
				</div>
				
				<div class="enroll">		
					<p style=" left: 3%;">Enrollment no </p>
					<input type="text" name="enroll" required >
				</div>
				
				<div class="name">
					<p style=" left: 3%;">Name</p>
					<input type="text" name="fname"required >	
				</div>
			
				<input type="submit" value="Add record" name="submit">
				
				</div>

		</div>
<?php 

	  if (isset($_POST['submit']))
{
	 $rollno=$_POST['roll'];
	 $enroll=$_POST['enroll'];
	 $fname=$_POST['fname'];
	if($rollno!=""|| $enroll!=""|| $fname!="")
	{
	    $db=mysqli_connect("localhost:3307",'root','root','system')
		or die("Connection failed");
	 
		
	    $sql ="insert into secondyear(roll,enroll,fname) 
	    values ('$rollno','$enroll','$fname')";
		$result=mysqli_query($db, $sql);

		$s1="Insert into demosecond (roll) values ('$rollno')";
		$r1=mysqli_query($db,$s1);
		$avgS=mysqli_query($db,"Insert into averageS (roll) values ('$rollno')");
	}
}
?>
</form>


		<div class="display">
		<table class="table" cellspacing="2" border="1" >
	<tr>
		<th colspan="4"><h2>Student Record</h2></th>
		</tr>
	<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		
	</tr>
	
	
	<?php
		$db=mysqli_connect("localhost:3307",'root','root','system')
		or die("Connection failed");
		$sqll="select roll,enroll,fname from secondyear";
	    $res=mysqli_query($db,$sqll);
	
		while($rows=mysqli_fetch_assoc($res))
		{
			
	?>
		<tr>
			<td><?php echo" {$rows['roll']}";?></td>
			<td><?php echo "{$rows['enroll']}";?></td>
			<td><?php echo "{$rows['fname']}";?></td>
		</tr>
		<?php
		}
		?>
</table>
</body>
</html>