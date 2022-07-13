<?php
		if(isset($_POST['V']))
	{
		echo'<div class="display">
		<table class="table" cellspacing="2" border="1" >
		<tr>
		<th colspan="11"><h2>Student Attendance(%)</h2></th>
		</tr>';
		echo"<tr>
		<th>Roll No</th>
		<th>Enrollment No</th>
		<th>Full Name</th>
		<th>EST</th>
		<th>STE</th>
		<th>OSY</th>
		<th>ITR</th>
		<th>CPP</th>
		<th>CSS</th>
		<th>ACN</th>
		<th>ADN</th>
		</tr>";
	
			while($rows=mysqli_fetch_assoc($sI))
		{
		?>
			<tr>
				<td><?php echo "{$rows['roll']}";?></td>
				<td><?php echo "{$rows['enroll']}";?></td>
				<td><?php echo "{$rows['fname']}";?></td>
				<td><?php echo round("{$rows['EST']}");?></td>
				<td><?php echo round("{$rows['STE']}");?></td>
				<td><?php echo round("{$rows['OSY']}");?></td>
				<td><?php echo round("{$rows['ITR']}");?></td>
				<td><?php echo round("{$rows['CPP']}");?></td>
				<td><?php echo round("{$rows['CSS']}");?></td>
				<td><?php echo round("{$rows['ACN']}");?></td>
				<td><?php echo round("{$rows['ADN']}");?></td>
			</tr>
		<?php
		}
	}
		
		if(isset($_POST['VI']))
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
		<th>WBP</th>
		<th>PWP</th>
		<th>EDE</th>
		<th>MAD</th>
		<th>ETI</th>
		<th>MGT</th>
		<th>CPE</th>
		</tr>";
	
			while($rows=mysqli_fetch_assoc($sI))
		{
		?>
			<tr>
				<td><?php echo "{$rows['roll']}";?></td>
				<td><?php echo "{$rows['enroll']}";?></td>
				<td><?php echo "{$rows['fname']}";?></td>
				<td><?php echo round("{$rows['WBP']}");?></td>
				<td><?php echo round("{$rows['PWP']}");?></td>
				<td><?php echo round("{$rows['EDE']}");?></td>
				<td><?php echo round("{$rows['MAD']}");?></td>
				<td><?php echo round("{$rows['ETI']}");?></td>
				<td><?php echo round("{$rows['MGT']}");?></td>
				<td><?php echo round("{$rows['CPE']}");?></td>
		
			</tr>
		<?php
		}
	}
?>