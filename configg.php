<?php

    session_start();
	$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');	
	
	$lectt=$_SESSION['l'];
	
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


	$sf="select roll from firstdemo";
	$rf=mysqli_query($db,$sf);
	if(mysqli_num_rows($rf)<=0)
	   { 
			
			$s1="Insert into firstdemo (roll) Select roll from firstyear";
			$r1=mysqli_query($db,$s1);
			$avgF=mysqli_query($db,"Insert into averageF (roll) Select roll from firstyear");
		}

		//for second year
	$ss="select roll from demosecond";
	$rs=mysqli_query($db,$ss);
	if(mysqli_num_rows($rs)<=0)
		{ 
			
			$s1="Insert into demosecond (roll) Select roll from secondyear";
			$r1=mysqli_query($db,$s1);
			$avgF=mysqli_query($db,"Insert into averageS (roll) Select roll from secondyear");
		
		}

		//For third year
	$st="select roll from demothird";
	$rt=mysqli_query($db,$st);
	if(mysqli_num_rows($rt)<=0)
		{ 
			
			$s3="Insert into demothird (roll) Select roll from thirdyear";
			$r3=mysqli_query($db,$s3);
			$avgF=mysqli_query($db,"Insert into averageT (roll) Select roll from thirdyear");
		
		}



			if(isset($_POST['first']))
		{
			$chk=$_POST['c'];
			$a=implode(",",$chk);
			foreach($chk as $v)
			{
				//echo$v;
				$sss="select $sub from firstdemo where roll='".$v."'";
				$rs=mysqli_query($db,$sss);
				$got=mysqli_fetch_array($rs);
				$curr_id=$got[$sub];
				$next=$curr_id+1;
				
				$ss="UPDATE firstdemo set $sub='".$next."' where roll='".$v."'";
				$rw=mysqli_query($db,$ss);

				$avg=($next/$_SESSION['l'])*100;
				$in=mysqli_query($db,"UPDATE averageF set $sub='".$avg."'where roll='".$v."'");
			}
				
			header("location:makeA.php");
         }


         	if(isset($_POST['third']))
		{
			$chk=$_POST['c'];
			$a=implode(",",$chk);
			foreach($chk as $v)
			{
				//echo$v;
				$sss="select $sub from demothird where roll='".$v."'";
				$rs=mysqli_query($db,$sss);
				$got=mysqli_fetch_array($rs);
				$curr_id=$got[$sub];
				$next=$curr_id+1;
				
				$ss="UPDATE demothird set $sub='".$next."' where roll='".$v."'";
				$rw=mysqli_query($db,$ss);

				$avg=($next/$_SESSION['l'])*100;
				$in=mysqli_query($db,"UPDATE averageT set $sub='".$avg."'where roll='".$v."'");

				
			}
		header("location:makeA.php");

         }


           	if(isset($_POST['second']))
		{
			$chk=$_POST['c'];
			$a=implode(",",$chk);
			foreach($chk as $v)
			{
			
				$sss="select $sub from demosecond where roll='".$v."'";
				$rs=mysqli_query($db,$sss);
				$got=mysqli_fetch_array($rs);
				$curr_id=$got[$sub];
				$next=$curr_id+1;
				$ss="UPDATE demosecond set $sub='".$next."' where roll='".$v."'";
				$rw=mysqli_query($db,$ss);

				$avg=($next/$_SESSION['l'])*100;
				$in=mysqli_query($db,"UPDATE averageS set $sub='".$avg."'where roll='".$v."'");
			}
				header("location:makeA.php");
         }


?>