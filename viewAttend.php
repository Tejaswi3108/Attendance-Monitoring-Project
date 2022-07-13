<html>
<head>
<style type="text/css">
.table{
    position:absolute;
    left:4px;
    top:1%;
    width:70%;
}
.display{

    width: 10%;
    height: 20%;
    background: transparent;
    color: #fff;
    top: 30%;
    left: 28%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 50px;

}
tr{
        ;
    
}
th{
    padding:5px 20px;
    font-family:arial;
}
td{
    
    font-family:arial;
}

</style>
<link rel="stylesheet" type="text/css" href="adminnavigation.css">
<link rel="stylesheet" type="text/css" href="viewAdmin.css">

<script src="validate.js"></script>
</head>

<body>

     <div class="header">
			<ul class="nav">
				<li><a href="adminPage.html" style="color:#1c8adb;font-weight:bold;" >Home</a></li>
				<li><a href="addFaculty.html" >Add Faculty</a></li>
				<li><a href="viewFaculty.php">View Faculty</a></li>
				<li><a href="viewAttend.php">View Attendance</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			</ul>
		</div>
	
 
<form action="" method="POST">
<div class="record">
			<div class="data">
			
				<input type="submit" value="I SEM" name="I">
				<input type="submit" value="II SEM" name="II" style="position: absolute; top: 20%;">
				<input type="submit" value="III SEM" name="III" style="position: absolute; top: 40%;">
				<input type="submit" value="IV SEM" name="IV" style="position: absolute; top: 50%;">
				<input type="submit" value="V SEM" name="V" style="position: absolute; top: 70%;">
		<input type="submit" name="VI" value="VI SEM" style="position: absolute; top: 80%;">
			</div>

</div>
</form>

<?php
	if(isset($_POST['I']))
	{
		echo'<form action="pdf_sem.php" method="POST">';
		echo'<input type="submit" value="Create PDF" name="CreateI" style="position: absolute; top: 40px; left: 1190px; background-color:blue;width:90px;">';
		echo"</form>";

		echo'<div class="display">
		<table class="table" cellspacing="2" border="1" >
		<tr>
		<th colspan="9"><h2>Student Attendance(%)</h2></th>
		</tr>';
		echo"<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		<th>ICT</th>
		<th>Math</th>
		<th>Physics</th>
		<th>Chemistry</th>
		<th>English</th>
		<th>Graphics</th>
		</tr>";
			include("semfirstyear.php");
			while($rows=mysqli_fetch_assoc($sI))
		{
		?>
			<tr>
				<td><?php echo "{$rows['roll']}";?></td>
				<td><?php echo "{$rows['enroll']}";?></td>
				<td><?php echo "{$rows['fname']}";?></td>
				<td><?php echo round("{$rows['ICT']}");?></td>
				<td><?php echo round("{$rows['Math']}");?></td>
				<td><?php echo round("{$rows['Physics']}");?></td>
				<td><?php echo round("{$rows['Chemistry']}");?></td>
				<td><?php echo round("{$rows['English']}");?></td>
				<td><?php echo round("{$rows['Graphics']}");?></td>
			</tr>
		<?php
		}
	}
		if(isset($_POST['II']))
	{

		echo'<div class="display">
		<table class="table" cellspacing="2" border="1" >
		<tr>
		<th colspan="10"><h2>Student Attendance(%)</h2></th>
		</tr>';
		echo"<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		<th>EEC</th>
		<th>BEC</th>
		<th>PIC</th>
		<th>CPH</th>
		<th>WPD</th>
		<th>AMI</th>
		<th>BCC</th>
		</tr>";
			include("semfirstyear.php");
			while($rows=mysqli_fetch_assoc($sI))
		{
		?>
			<tr>
				<td><?php echo "{$rows['roll']}";?></td>
				<td><?php echo "{$rows['enroll']}";?></td>
				<td><?php echo "{$rows['fname']}";?></td>
				<td><?php echo round("{$rows['EEC']}");?></td>
				<td><?php echo round("{$rows['BEC']}");?></td>
				<td><?php echo round("{$rows['PIC']}");?></td>
				<td><?php echo round("{$rows['CPH']}");?></td>
				<td><?php echo round("{$rows['WPD']}");?></td>
				<td><?php echo round("{$rows['AMI']}");?></td>
				<td><?php echo round("{$rows['BCC']}");?></td>
			</tr>
		<?php
		}
	}
	if(isset($_POST['III']))
	{

			include("semfirstyear.php");
			include("secondAdmin.php");
	}
	if(isset($_POST['IV']))
	{
			include("semfirstyear.php");
			include("secondAdmin.php");
	}
	if(isset($_POST['V']))
	{
			include("semfirstyear.php");
			include("thirdAdmin.php");
	}
	if(isset($_POST['VI']))
	{
			include("semfirstyear.php");
			include("thirdAdmin.php");

	}


?>
</body>
</html>
