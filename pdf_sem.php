<?php

require("fpdf/fpdf.php");  
$db = mysqli_connect('localhost:3307','root','root','system')
	or die('Error connecting to MySQL server.');	

//include("pdff.php");
$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);



	/*function fetch_I()
	{
		$sI=mysqli_query($db,"select firstyear.roll,firstyear.enroll,firstyear.fname, averageF.ICT,averageF.Math,averageF.Physics,averageF.Chemistry,averageF.Graphics,averageF.English
			from firstyear,averageF where firstyear.roll=averageF.roll order by firstyear.roll ASC");
		$output='';	 
		while($row = mysqli_fetch_array($sI))
		   {
			 $output .= '<tr>  
                          <td>'.$row["roll"].'</td>  
                          <td>'.$row["enroll"].'</td>  
                          <td>'.$row["fname"].'</td>  
                          <td>'.$row["ICT"].'</td>  
                          <td>'.$row["Math"].'</td>
						  <td>'.$row["Physics"].'</td>
						  <td>'.$row["Chemistry"].'</td>
						  <td>'.$row["English"].'</td>
						  <td>'.$row["Graphics"].'</td>
             			</tr>';      	
                     	
            }
            return $output;
	}*/

		
		if(isset($_POST['CreateI']))
		{
			$pdf->Cell(176, 5, 'Welcome to GeeksforGeeks!', 0, 0, 'C'); 
			$pdf->Cell(10,5,"Roll no",1,0,'C');
			//$pdf->cell(40,10,"Enrollment no",1,0,'C');
			$pdf->Output();

		}
?>