<?php
require 'Foundation/Gestione/Gpreleva.php';
require 'View/VUtente.php';
require 'Foundation/Fconndb.php';
require 'Foundation/Futente.php';
require 'Foundation/FPassaporto.php';
require_once 'classi/Passaporto.php';
include 'lib/fpdf/fpdf.php';

class GreenPdf extends FPDF
{
    public function Header()
    {
        $this->Image('img/Senza titolo-1.png',10,-1,70);
        $this->SetFont('Arial','B',20);
        $this->Cell(80);
        $this->Cell(80,10,'GREEN PASS',0,0,'C');
        $this->Ln(20);
    }

    public function Body($id)
    {
        $Fdb = new FUtente();
        $Fp = new FPassaporto();
        $ut=$Fdb->UtentiReg();
        $this->SetFont('Arial','B',13);
        $this->Cell(80);
        $this->Ln(20);
        if(isset($ut))
        {
            for($i=0;$i<sizeof($ut);$i++)
            {
                if($id == $ut[$i]->get_id())
                {
                    $this->Cell(50,10,'ID UTENTE:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_id(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'NOME:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_nome(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'COGNOME:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_cognome(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'CODICE FISCALE:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_cdf(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'SESSO:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_sex(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'DATA DI NASCITA:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_datans(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'LUOGO DI NASCITA:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_luogons(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'DOSE 1:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_std1(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'DOSE 2:',0,0);
                    $this->Cell(80,10,$ut[$i]->get_std2(),0,0);
                    $this->Ln(10);
                    $this->Cell(50,10,'STATO:',0,0);
                    if(strcmp($ut[$i]->get_std1(),'si') ==0 && strcmp($ut[$i]->get_std2(),'si') ==0)
                    {
                        $this->Cell(80,10,'APPROVATO',0,0,'C');
                        $istrue =true;
                    }
                    else
                    {
                        $this->Cell(80,10,'NON APPROVATO',0,0,'C');
                        $istrue=false;
                    }
                    
                }
            }

        }
        $fk=$Fp->UtentiGreenPass();
        $this->Ln(20);
        $this->SetLeftMargin(130);
        $this->Cell(40,10,'Rilasciato il:',0,0);
        if($istrue && !in_array($id,$fk))
        {
            $data=date("Y/m/d");
            $this->Cell(55,10,$data,0,0);
            $Fp->InsGP($data,'Approvato',$id);
        }
        elseif(in_array($id,$fk))
        {
            $Gr=$Fp->Preleva_GreenPass($id);
            $data_rilascio=$Gr->getDataRilascio();
            $this->Cell(55,10,$data_rilascio,0,0);
        }  
        $this->Ln(20);
    }
}
$vu=Gpreleva::getIstanza('VUtente');   
$id=$vu->getID();
$pdf = new GreenPdf();
$pdf->Header();
$pdf->AddPage();
$pdf->Body($id);
$pdf->Output();
?>