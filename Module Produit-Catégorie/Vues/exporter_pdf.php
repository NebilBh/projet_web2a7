<?php
include "../Core/ProduitC.php";
require('fpdf.php');

//Initialize the 3 columns and the total
$column_image = "";
$column_code = "";
$column_marque = "";//name
$column_prix = "";//price
$column_note = "";


$number_of_products=0;
$Produitc2 = new ProduitC();
$tab2 = $Produitc2->afficher();

foreach($tab2 as $row2)
{
	$image = $row2["image"];
	$code = $row2["id_produit"];
    $marque = $row2["Marque"];
    $prix = $row2["prix"];
    $note = $row2["note"];

    $column_image = $column_image.$image."\n";
    $column_code = $column_code.$code."\n";
    $column_marque = $column_marque.$marque."\n";
    $column_prix = $column_prix.$prix."\n";
    $column_note = $column_note.$note."\n";
	$number_of_products++;
}

//Create a new PDF file
//$pdf=new FPDF();
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage('L','A4',0);

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetY(20);
$pdf->Cell(273,6,'Catalogue Afric Optic 2019',1,0,'C',1);
$pdf->Ln();
//$pdf->Cell(297,6,'Notes',1,0,'C',1);
//inserer image
$image1 = "images/2.jpg";
//$pdf->Cell( 40, 40, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$tab2 = $Produitc2->afficher();

$pdf->SetFont('Arial','',12);
$pdf->SetFillColor(255,255,255);
$Y_Fields_Name_position+=6;

$x = 10;
$y = 26;
$i = 0;

foreach($tab2 as $row2)
{
	$image = $row2["image"];
	$code = $row2["id_produit"];
    $marque = $row2["Marque"];
    $prix = $row2["prix"];
    $note = $row2["note"];

    $pdf->SetY($y);
	$pdf->SetX($x);
	if($image!='' && $image != null)$pdf->Cell(50+13,10,$pdf->Image('images/'.$image, $pdf->GetX(), $pdf->GetY(),63,63),1,0,'',false);
	else $pdf->Cell(50+13,10,$pdf->Image('images/not_found.png', $pdf->GetX(), $pdf->GetY(),63,63),1,0,'',false);
	/*$pdf->SetY($y+63);
	$pdf->SetX($x);
	$pdf->Cell(63,10,$code,1,0,'C',1);*/
	$pdf->SetY($y);
	$pdf->SetX($x);
	$pdf->Cell(63,10,$marque,1,0,'C',1);
	$pdf->SetY($y+53);
	$pdf->SetX($x);
	$pdf->Cell(63,10,$prix,1,0,'C',1);
	/*$pdf->SetY($y+93);
	$pdf->SetX($x);
	$pdf->Cell(63,10,$note,1,0,'C',1);*/

	$x += 70;
	$i++;

	if($x>230)
	{
		if($y+63<130)$y+=73;
		else 
		{
			$pdf->AddPage('L','A4',0);
			$y = 15;
		}
		$x = 10;
	}

}

//Now show the 3 columns
/*$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->Cell( 40, 40, $pdf->Image('/images/'.$column_image, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );//$pdf->MultiCell(20,6,$column_image,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(65);
$pdf->MultiCell(20,6,$column_code,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(85);
$pdf->MultiCell(20,6,$column_marque,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(105);
$pdf->MultiCell(20,6,$column_prix,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(125);
$pdf->MultiCell(20,6,$column_note,1	);
$pdf->SetY($Y_Table_Position);
//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(45);
    $pdf->MultiCell(120,6,'',1);
    $i = $i +1;
}*/

$pdf->Output();
			
		

?>
