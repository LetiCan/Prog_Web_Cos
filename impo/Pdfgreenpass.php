<?php
require_once 'Foundation/Fconndb.php';
include 'lib/fpdf/fpdf.php';
class GreenPdf extends FPDF
{
    public function Header()
    {
        $this->Image('Senza titolo-1.png',10,-1,70);
        $this->SetFont('Arial','B',13);
        $this->Cell(80);
        $this->Cell(80,10,'Green Pass',1,0,'C');
        $this->Ln(20);
    }
}

$Fdb = new Fconndb();
$db = $Fdb->connessione();
$pdf = new GreenPdf();
$pdf->Header();
//$pdf->AddPage();
$pdf->Output();
?>