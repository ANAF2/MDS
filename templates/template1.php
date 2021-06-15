<?php
require('../fpdf/fpdf.php');
require('../includes/db_config.php');

include("../includes/functions.php");

session_start();
$userid = $_SESSION["userid"];

// Sample data
$name = "Zoican Robert Petrisor";
$address = "";
$telephone = "+40746367024";
$email = "";

$motivatie = "Here comes the personal motivation";

$educatie = array(
	array("High School","University"),
	array("Scoala1 sad nasd vhjgfas dasfd yfgas dhgsadhgf sadchsfadc afsd chfadc agsf dhjafs djhasf dhjfasd hgafs hdjfahsdgf asdgjf","Scoala2")	
);

$experienta = array(
	array("12.12.2000-12.12.2005","data3-data4"),
	array("titlu1","titlu2"),
	array("jobahs dbkjbsad kjasb djksa vjkdhasvjkdhvasdgjvasugjdv asgvd1","proiect1")	
);

$certificate = array("certificat1", "certificat2");

$projects = array("project1", "project2");

$skills = array("skill1asd","skill2","skill3","skill4");
$limbi = array(
	array("limba1","limbaasd2"),
	array("nivel1","nivel2")
);

// User data

$filePath = getPathForUser($conn, $userid);

$data = readJson($filePath);

$name = $data["lastname"] . " " . $data["firstname"];
$email = $data["email"];
$telephone = $data["phone"];
$motivatie = $data["Personal description"];

$educatie[1][0] = $data["High School"];
$educatie[1][1] = $data["University"];

$experienta = $data["Work experience"];
$projects = $data["Projects"];
$certificate = $data["Certifications"];
$skills  =$data["Skills"];

$address = $data["Adress"];


///
$pdf = new FPDF('P','mm','A4');


$width = $pdf->GetPageWidth();

$pdf->SetMargins(0,0,0);
$pdf->AddPage();

// Make Header Area

$pdf->SetTextColor(255,255,255);   //make text white
$pdf->SetFillColor(0,102,204);
$pdf->Cell($width,55,"","B",1,'L',1);

//Set Name
$pdf->SetFont('Arial','B',24);
$pdf->SetXY(15,15);
$pdf->Cell(150,15,$name);

//Personal details  ,phone
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(15,30);
$pdf->Cell(40,10,"Phone:   ".$telephone);
//Email
$pdf->SetXY(15,40);
$pdf->Cell(40,10,"Email:   ".$email);
//Address
$pdf->SetXY(75,30);
$pdf->Cell(20,10,"Address:",0,0);
$pdf->MultiCell($width-105,10,$address);

//End of header

$pdf->SetTextColor(0,0,0);	//make text black again

//Personal Drive (skippable)

if($motivatie != ""){
	$pdf->SetFont('Arial','',12);
	$pdf->SetXY(15,60);
	$pdf->MultiCell($width-30,10,$motivatie,0);

	$pdf->Cell($width,5,"","B",1);   //line
}else{
	$pdf->SetXY(15,60);
	
	 
}

//End of Personal Drive


//Education

$pdf->SetX(15);
$pdf->SetFont('Arial','B',18);
$pdf->Cell($width-30,15,"Education",0,1);

for ($i = 0; $i < count($educatie[0]); $i++) {
	$pdf->SetX(15);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,7,$educatie[0][$i].":",0,0);
	$pdf->SetFont('Arial','',12);
	$pdf->MultiCell($width-70,7,$educatie[1][$i],0,1);

	$pdf->Cell(40,5,"",0,1);  
}

//End of Education

$pdf->Cell($width,5,"","B",1);   //line

//Experience
/*
$pdf->SetX(15);
$pdf->SetFont('Arial','B',18);
$pdf->Cell($width-30,15,"Experience",0,1);


for ($i = 0; $i < count($educatie[0]); $i++) {
	$pdf->SetX(15);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(40,7,$experienta[0][$i].":",0,0);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell($width-70,7,$experienta[1][$i],0,1);
	$pdf->SetX(55);
	$pdf->SetFont('Arial','',12);
	$pdf->MultiCell($width-70,7,$experienta[2][$i],0,1); 

	$pdf->Cell(40,5,"",0,1);    
}*/

$pdf->SetX(15);
$pdf->SetFont('Arial','B',18);
$pdf->Cell($width-30,15,"Experience",0,1);


for ($i = 0; $i < count($experienta); $i++) {
	$pdf->SetX(15);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,7,"-> ",0,0);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell($width-70,7,$experienta[$i],0,1);
	

	$pdf->Cell(40,5,"",0,1);    
}

//End of Experience

$pdf->Cell($width,5,"","B",1);   //line

//Certificates

if(count($certificate) != 0){
	$pdf->SetX(15);
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell($width-30,15,"Certificates",0,1);

	for($i = 0; $i < count($certificate); $i++){
		$pdf->SetX(15);
		$pdf->SetFont('Arial','',12);
		$pdf->Cell($width-30,8,"-> ".$certificate[$i],0,1);
	}


	$pdf->Cell($width,5,"","B",1);   //line
}

//End of Certificates

//Projects

if(count($projects) != 0){
	$pdf->SetX(15);
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell($width-30,15,"Projects",0,1);

	for($i = 0; $i < count($projects); $i++){
		$pdf->SetX(15);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell($width-30,8,"-> ".$projects[$i],0,1);
	}


	$pdf->Cell($width,5,"","B",1);   //line
}

//End of Projects

//Skills + Limbi

$pdf->SetX(15);
$pdf->SetFont('Courier','B',18);
$pdf->Cell(($width-30)/2,15,"Skills",0,0);
$pdf->Cell(($width-30)/2,15," ",0,1);

for ($i = 0; $i < count($skills); $i++) {
	$pdf->SetX(15);
	$pdf->SetFont('Courier','B',12);
	if($i < count($limbi[0])){
		$pdf->Cell(($width-30)/2,8,"-> ".$skills[$i],0,0);
	    $pdf->Cell(($width-30)/4,8,"",0,0);
		$pdf->Cell(($width-30)/4,8,"",0,1);
	}else{
		$pdf->Cell(($width-30)/2,8,"-> ".$skills[$i],0,1);
	}

}



//End of Skills + Limbi


$pdf->Output();


?>