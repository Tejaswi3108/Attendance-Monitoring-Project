<?php

	$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');	
  require("fpdf/fpdf.php");  

  $pdf=new FPDF('p','mm','A4');
  $pdf->AddPage();
$pdf->SetFont('Times', 'B', 20);


		
?>