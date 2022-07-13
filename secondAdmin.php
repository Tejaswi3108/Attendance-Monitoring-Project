<?php
	if(isset($_POST['III']))
	{
		echo'<div class="display">
		<table class="table" cellspacing="2" border="1" >
		<tr>
		<th colspan="8"><h2>Student Attendance(%)</h2></th>
		</tr>';
		echo"<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		<th>OOP</th>
		<th>DSU</th>
		<th>CGR</th>
		<th>DTE</th>
		<th>DMS</th>
		</tr>";
			
			while($rows=mysqli_fetch_assoc($sI))
		{
		?>
			<tr>
				<td><?php echo "{$rows['roll']}";?></td>
				<td><?php echo "{$rows['enroll']}";?></td>
				<td><?php echo "{$rows['fname']}";?></td>
				<td><?php echo round("{$rows['OOP']}");?></td>
				<td><?php echo round("{$rows['DSU']}");?></td>
				<td><?php echo round("{$rows['CGR']}");?></td>
				<td><?php echo round("{$rows['DTE']}");?></td>
				<td><?php echo round("{$rows['DMS']}");?></td>
			</tr>
		<?php
		}
	}
	if(isset($_POST['IV']))
	{
		echo'<div class="display">
		<table class="table" cellspacing="2" border="1" >
		<tr>
		<th colspan="8"><h2>Student Attendance(%)</h2></th>
		</tr>';
		echo"<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		<th>JPR</th>
		<th>SEN</th>
		<th>MIC</th>
		<th>GAD</th>
		<th>DCC</th>
		</tr>";
	
			while($rows=mysqli_fetch_assoc($sI))
		{
		?>
			<tr>
				<td><?php echo "{$rows['roll']}";?></td>
				<td><?php echo "{$rows['enroll']}";?></td>
				<td><?php echo "{$rows['fname']}";?></td>
				<td><?php echo round("{$rows['JPR']}");?></td>
				<td><?php echo round("{$rows['SEN']}");?></td>
				<td><?php echo round("{$rows['MIC']}");?></td>
				<td><?php echo round("{$rows['GAD']}");?></td>
				<td><?php echo round("{$rows['DCC']}");?></td>
			</tr>
		<?php
		}
	}
?>