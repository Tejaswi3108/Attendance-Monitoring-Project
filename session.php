<?php

	session_start();
	$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');	
	//echo $_SESSION['user'];

	$sql="select sem from faculty_details where fuser='".$_SESSION['user']."'";
	$res=mysqli_query($db,$sql);

	$subql="select sub from faculty_details where fuser='".$_SESSION['user']."'";
	$subres=mysqli_query($db,$subql);
	$s = mysqli_fetch_assoc($subres);
	$sub=$s['sub'];
	$_SESSION['subb']=$sub;

	$row = mysqli_fetch_assoc($res);
	//echo $row['sem'];
	$_SESSION['semm']=$row['sem'];


	$s=$_SESSION['semm'];
	$sub=$_SESSION['subb'];

	$lct="select lectu from faculty_details where fuser='".$_SESSION['user']."'";
	$lres=mysqli_query($db,$lct);
	$a=mysqli_fetch_assoc($lres);
	$l=$a['lectu'];

?>