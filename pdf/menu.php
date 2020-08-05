<?php
include 'includes/db.php';
require('fpdf182/fpdf.php');

/**
* HEADER
*/
class PDF extends FPDF
{
	function Header(){
		//dummy cell to put logo
		$this -> Cell(12);
		//Seku logo
		$this ->Image('images/seku_logo.png',78,10);
		$this ->Image('images/Watermark.jpg',10,90,189);
	}

	function Footer(){
		$this -> SetFont('Arial','B',10);
		// Go to 1.5cm from bottom
		$this -> SetY(-15);
		$this -> Cell(0,5,'Seku guest house, copyright 2020;',0,1,'C');
		$this -> Cell(0,5,'Page '.$this -> PageNo("{pages}"),0,0,'C');
	}
}

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219 - (10*2) = 199mm

$pdf = new PDF('P','mm','A4'); //creating an FPDF Object
$pdf ->AddPage(); //Adds a page

//Menu heading
$pdf ->SetFont('Arial','B',30);
$pdf ->Ln(55);
$pdf ->Cell(189,10,"SEKU GUEST HOUSE MENU",0,1,'C');
$pdf ->Cell(189,10,'',0,1);
$pdf ->Image('images/Watermark.jpg',10,100,189);

// MENU
// HOT BEVERAGES
if(!$connect){
	die('Database connection failed!!');
}else{
	$query = "SELECT * FROM menu WHERE CAT_OF_FOOD = 'hot beverages'";
	$result = mysqli_query($connect,$query);
// FIx the displaying
		$pdf ->SetFont('Arial','B',14);
		$pdf ->Cell(189,5,'HOT BEVERAGES',0,1,'C');

	while ($info = mysqli_fetch_assoc($result)) {
		$name = $info['NAME_OF_FOOD'];
		$price = $info['PRICE'];
		
		$pdf ->SetFont('Arial','',15);
		$pdf ->Cell(189,5,'',0,1);
		$pdf ->Cell(92,5,$name,0,0,'C');
		$pdf ->Cell(5,5,'-',0,0);
		$pdf ->Cell(0,5,$price,0,1,'C');

	}
}

// Snacks
if(!$connect){
	die('Database connection failed!!');
}else{
	$query = "SELECT * FROM menu WHERE CAT_OF_FOOD = 'snacks'";
	$result = mysqli_query($connect,$query);
// FIx the displaying
		$pdf ->SetFont('Arial','B',14);
		$pdf ->Cell(40,5,'',0,1);
		$pdf ->Cell(189,5,'SNACKS',0,1,'C'); 

	while ($info = mysqli_fetch_assoc($result)) {
		$name = $info['NAME_OF_FOOD'];
		$price = $info['PRICE'];
		
		$pdf ->SetFont('Arial','',15);
		$pdf ->Cell(189,5,'',0,1);
		$pdf ->Cell(92,5,$name,0,0,'C');
		$pdf ->Cell(5,5,'-',0,0);
		$pdf ->Cell(0,5,$price,0,1,'C');

	}
}

// Dessert
if(!$connect){
	die('Database connection failed!!');
}else{
	$query = "SELECT * FROM menu WHERE CAT_OF_FOOD = 'desserts'";
	$result = mysqli_query($connect,$query);
// FIx the displaying
		$pdf ->SetFont('Arial','B',14);
		$pdf ->Cell(40,5,'',0,1);
		$pdf ->Cell(189,5,'DESSERT',0,1,'C'); 

	while ($info = mysqli_fetch_assoc($result)) {
		$name = $info['NAME_OF_FOOD'];
		$price = $info['PRICE'];
		
		$pdf ->SetFont('Arial','',15);
		$pdf ->Cell(189,5,'',0,1);
		$pdf ->Cell(92,5,$name,0,0,'C');
		$pdf ->Cell(5,5,'-',0,0);
		$pdf ->Cell(0,5,$price,0,1,'C');

	}
}
$pdf ->Cell(189,50,'',0,1);

// Soft drinks
if(!$connect){
	die('Database connection failed!!');
}else{
	$query = "SELECT * FROM menu WHERE CAT_OF_FOOD = 'soft drinks'";
	$result = mysqli_query($connect,$query);
// FIx the displaying
		$pdf ->SetFont('Arial','B',14);
		$pdf ->Cell(189,5,'SOFT DRINKS',0,1,'C'); 

	while ($info = mysqli_fetch_assoc($result)) {
		$name = $info['NAME_OF_FOOD'];
		$price = $info['PRICE'];
		
		$pdf ->SetFont('Arial','',15);
		$pdf ->Cell(189,5,'',0,1);
		$pdf ->Cell(92,5,$name,0,0,'C');
		$pdf ->Cell(5,5,'-',0,0);
		$pdf ->Cell(0,5,$price,0,1,'C');

	}
}

// Starches
if(!$connect){
	die('Database connection failed!!');
}else{
	$query = "SELECT * FROM menu WHERE CAT_OF_FOOD = 'starches'";
	$result = mysqli_query($connect,$query);
// FIx the displaying
		$pdf ->SetFont('Arial','B',14);
		$pdf ->Cell(189,5,'STARCHES',0,1,'C'); 

	while ($info = mysqli_fetch_assoc($result)) {
		$name = $info['NAME_OF_FOOD'];
		$price = $info['PRICE'];
		
		$pdf ->SetFont('Arial','',15);
		$pdf ->Cell(189,5,'',0,1);
		$pdf ->Cell(92,5,$name,0,0,'C');
		$pdf ->Cell(5,5,'-',0,0);
		$pdf ->Cell(0,5,$price,0,1,'C');

	}
}

// Vegetables
if(!$connect){
	die('Database connection failed!!');
}else{
	$query = "SELECT * FROM menu WHERE CAT_OF_FOOD = 'vegetables'";
	$result = mysqli_query($connect,$query);
// FIx the displaying
		$pdf ->SetFont('Arial','B',14);
		$pdf ->Cell(189,5,'VEGETABLES',0,1,'C'); 

	while ($info = mysqli_fetch_assoc($result)) {
		$name = $info['NAME_OF_FOOD'];
		$price = $info['PRICE'];
		
		$pdf ->SetFont('Arial','',15);
		$pdf ->Cell(189,5,'',0,1);
		$pdf ->Cell(92,5,$name,0,0,'C');
		$pdf ->Cell(5,5,'-',0,0);
		$pdf ->Cell(0,5,$price,0,1,'C');

	}
}

// Main Dishes
if(!$connect){
	die('Database connection failed!!');
}else{
	$query = "SELECT * FROM menu WHERE CAT_OF_FOOD = 'main dishes'";
	$result = mysqli_query($connect,$query);
// FIx the displaying
		$pdf ->SetFont('Arial','B',14);
		$pdf ->Cell(189,5,'MAIN DISHES',0,1,'C'); 

	while ($info = mysqli_fetch_assoc($result)) {
		$name = $info['NAME_OF_FOOD'];
		$price = $info['PRICE'];
		
		$pdf ->SetFont('Arial','',15);
		$pdf ->Cell(189,5,'',0,1);
		$pdf ->Cell(92,5,$name,0,0,'C');
		$pdf ->Cell(5,5,'-',0,0);
		$pdf ->Cell(0,5,$price,0,1,'C');

	}
}
// Generates pdf
$pdf -> Output();
?>