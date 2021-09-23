<?php
require 'Foundation/Fconndb.php';
require 'Foundation/Futente.php';
include 'lib/fpdf/fpdf.php';

class GreenPdf extends FPDF
{
    public function Header()
    {
        $this->Image('img/Senza titolo-1.png',10,-1,70);
        $this->SetFont('Arial','B',13);
        $this->Cell(80);
        $this->Cell(80,10,'Green Pass',1,0,'C');
        $this->Ln(20);
    }

    public function Body($id)
    {
        $Fdb = new FUtente();
        $ut=$Fdb->UtentiReg();
        if(isset($ut))
        {
            for($i=0;$i<sizeof($ut);$i++)
            {
                if($id == $ut[$i]->get_id())
                {
                    $this->SetFont('Arial','B',13);
                    $this->Cell(80);
                    $this->Ln(10);
                    $this->Cell(50,10,'ID UTENTE:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_id(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'NOME:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_nome(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'COGNOME:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_cognome(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'CODICE FISCALE:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_cdf(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'SESSO:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_sex(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'DATA DI NASCITA:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_datans(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'LUOGO DI NASCITA:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_luogons(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'DOSE 1:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_std1(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'DOSE 2:',1,0,'C');
                    $this->Cell(80,10,$ut[$i]->get_std2(),1,0,'C');
                    $this->Ln(10);
                    $this->Cell(50,10,'STATO:',1,0,'C');
                    if(strcmp($ut[$i]->get_std1(),'si') ==0 && strcmp($ut[$i]->get_std2(),'si') ==0)
                    {
                        $this->Cell(80,10,'APPROVATO',1,0,'C');
                    }
                    else
                    {
                        $this->Cell(80,10,'NON APPROVATO',1,0,'C');
                    }
                    
                }
            }

        }
        
    }
}

$id=$_POST['id'];
$pdf = new GreenPdf();
$pdf->Header();
$pdf->AddPage();
$pdf->Body($id);
$pdf->Output();
?>