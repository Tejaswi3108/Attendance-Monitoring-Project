<?php

	$lsql="update faculty_details set lectu='".$lectt."' where fuser='".$_SESSION['user']."'";
	$l=mysqli_query($db,$lsql);
	$sql="select lectu from faculty_details where fuser='".$_SESSION['user']."'";
	$res=mysqli_query($db,$sql);
	$s = mysqli_fetch_assoc($res);
	echo"jo".$s['lectu'];
?>