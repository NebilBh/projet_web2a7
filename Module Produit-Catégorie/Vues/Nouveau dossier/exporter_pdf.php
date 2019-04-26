<?php
include "../Core/ProduitC.php";
require('fpdf.php');

$Produitc2 = new ProduitC();
$tab2 = $Produitc2->afficher();

//Create a new PDF file
$pdf=new FPDF();
$pdf->AddPage('L','A4',0);

//titre de la page
$pdf->SetTitle('Catalogue Afric Optic');

$pdf->SetFillColor(232,232,232);//ajouter une couleur 
$pdf->SetFont('Arial','B',12);//police , bold , taille police
//$pdf->SetX(100);//set pdf x
$pdf->SetY(20);//set pdf y
$pdf->Cell(275,6,'Catalogue Afric Optic 2019',1,0,'C',1);//width , height , text , 0->sans bordure / 1->avec bordure, xxxx , position 'Left' , 'Right' , Center
$pdf->Ln();//passer a la ligne suivante (<br>)
$pdf->Ln();

$x=50 ;
$y=50 ;
$i = 0;
$j = 0;
$pdf->SetFillColor(255,255,255);//ajouter une couleur 
$pdf->SetFont('Arial','',10);//police , bold , taille police

/*$pdf->Ln();
$pdf->Cell(20,10,'Hello World !');
$pdf->Cell(40,10,'Hello World !');*/

foreach($tab2 as $row2)
{
    $marque = $row2["Marque"];
    $prix = $row2["prix"];
    $note = $row2["note"];
    $image = $row2["image"];
    if($image==''||$image!=null)
    {
    	$image='not_found.png';
    }

    if($i>6)
    {
    	//$x=50;
    	if($j==0)$j=1;else $j=0;
    	$i=0;
    	$pdf->Ln();
	}
	//$pdf->SetX($x);//set pdf x
	//$pdf->SetY($y);//set pdf y
    if($j==0)$pdf->Cell( 40, 40, $pdf->Image('images/'.$image, $pdf->GetX(), $pdf->GetY(), 30,30), 0, 0, '', false );//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
    //$pdf->Ln();//passer a la ligne suivante (<br>)

    $id_produit = $row2["id_produit"];
    //$pdf->SetX($x);//set pdf x
	//$pdf->SetY($y+30);//set pdf y
	if($i!=0)$pdf->Cell(40,6,$id_produit,0,0,'',1);//Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
	$i++;//$pdf->Output();
	//$pdf->Ln();//passer a la ligne suivante (<br>)
    //$x=$x+50;
    /*if($x>800)
    	{
    		$x=50;
    		$y=$y+50;
    	}*/
}

//inserer image
//$image1 = "images/2.jpg";
//$pdf->Cell( 40, 40, $pdf->Image($image1, $pdf->GetX()+100, $pdf->GetY(), 33.78), 0, 0, 'L', false );
/*
//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(20,6,$column_code,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(65);
$pdf->MultiCell(100,6,$column_marque,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$column_name,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(165);
$pdf->MultiCell(30,6,$column_price,1,'R');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(45);
    $pdf->MultiCell(120,6,'',1);
    $i = $i +1;
}
*/
$pdf->Output();
			
		

?>
