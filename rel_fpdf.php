<?php
/*
// Modelo 1
require_once("fpdf/fpdf.php");
 
$pdf= new FPDF("P","pt","A4");
 
$pdf->AddPage();
$pdf->SetFont('arial','B',12);
$pdf->Cell(0,5,"Boteco Digital",0,1,'L');
$pdf->Ln(8);
$pdf->Output("arquivo.pdf","D");
*/

/*
// Modelo 2
$nome = "Rodrigo";
$email = "blogbotecodigital@gmail.com";
$endereco = "Rua do Andradas 9999 nº 12";
$cep = "99999-999";
$cidade = "Urugaiana";
$estado = "RS";
$telefone= "9999-9999";
$observacoes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis fringilla sagittis. Aliquam eu est dapibus justo commodo dapibus. Etiam aliquet, mauris id gravida suscipit, purus ligula venenatis nisi, eget dignissim elit ipsum a libero. In tristique vestibulum arcu sit amet mattis. Ut aliquet cursus consectetur. Fusce eu lacinia magna. Praesent laoreet sapien at est pulvinar nec facilisis sem mollis. Nulla eget congue tellus. Praesent id velit id sem volutpat condimentum ut at ligula. Phasellus libero leo, ultricies et eleifend et, mollis a metus. Duis adipiscing imperdiet luctus. Vestibulum pulvinar, dolor vel porttitor posuere, nisl est lacinia felis, nec gravida felis risus nec ante. Integer imperdiet, dui vitae pellentesque tempor, magna purus accumsan augue, eget hendrerit risus leo quis augue. Vivamus faucibus est quis ante placerat congue. ";
 
require_once("fpdf/fpdf.php");
 
$pdf= new FPDF("P","pt","A4");
  
$pdf->AddPage();
$pdf->Image('logoif.png');
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Ficha",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(8);
 
 
//nome
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Nome:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$nome,0,1,'L');
 
//email
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"E-mail:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$email,0,1,'L');
 
//Endereço
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Endereço:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$endereco,0,1,'L');
 
//cep
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"CEP:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$cep,0,1,'L');
 
//cidade
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Cidade:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$cidade,0,1,'L');
 
//Estado
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Estado:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$estado,0,1,'L');
 
$pdf->ln(10);
//Observações
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Observações:",0,1,'L');
$pdf->setFont('arial','',12);
$pdf->MultiCell(0,20,$observacoes,0,'J');
 
$pdf->Output("arquivo2.pdf","D");
*/


// Modelo 3

require_once("fpdf/fpdf.php");
$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Relatório",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(50);
 
//cabeçalho da tabela 
$pdf->SetFont('arial','B',14);
$pdf->Cell(130,20,'Coluna 1',1,0,"L");
$pdf->Cell(140,20,'Coluna 2',1,0,"L");
$pdf->Cell(130,20,'Coluna 3',1,0,"L");
$pdf->Cell(160,20,'Coluna 4',1,1,"L");
 
//linhas da tabela
$pdf->SetFont('arial','',12);
for($i= 1; $i <10;$i++){
    $pdf->Cell(130,20,"Linha ".$i,1,0,"L");
    $pdf->Cell(140,20,rand(),1,0,"L");
    $pdf->Cell(130,20,rand(),1,0,"L");
    $pdf->Cell(160,20,rand(),1,1,"L");
}
// $pdf->Output("arquivo3.pdf","I");
$pdf->Output("D","arquivo3.pdf");

// readfile("arquivo3.pdf");

// <iframe src="arquivo3.pdf" width="600" height="780" style="border: none;"></iframe>


?>

