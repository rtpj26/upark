<?php
	include "fpdf.php";
	
	class PDF extends FPDF{
		function Header(){
			$this->Image('../../printImg/header.png',3,6,203);
			$this->SetFont('Arial','B',15);
			$this->Ln(20);
		}

		function Footer(){
			$this->Image('../../printImg/footer.png', 3, 250,203);
		}
		
		
	}
	
	$acct = new PDF("P", "mm", "Letter");
	$acct->AddPage();
	$acct->SetFont('Arial','B',12);
	$acct->Cell(203, 0, "User Information", 0, 0, 'J', False, '');
	$acct->Ln();
	$acct->SetFont('Arial','',10);
	$acct->Cell(203, 0, "", 0, 0, 'J', False, '');
	$acct->Cell(203, 0, "First Name: ", 0, 1, 'J', False, '');
	$acct->Cell(203, 0, "User 1", 0, 0, 'J', False, '');
	$acct->output();
	
?>