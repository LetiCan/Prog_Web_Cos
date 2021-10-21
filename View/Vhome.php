<?php
require_once 'View.php';
require_once 'impo/Utility.php';
require_once 'Foundation/Gestione/Gpreleva.php';
class Vhome extends View
{
 
    public function DatiReg()
    {
        if(isset($_POST['nome'],$_POST['cognome'],$_POST['datanascita'],$_POST['ldn'],$_POST['prov'],$_POST['cdf'],$_POST['sesso'],$_POST['username'],$_POST['pwd']))
        {
            $c=Gpreleva::getIstanza('Utility');
            $ldn=array('com'=>$_POST['ldn'],'pro'=>$_POST['prov']);
            $cdf_ins=strtoupper($_POST['cdf']);
            $cdf_cal=$c->Check_cdf($_POST['nome'],$_POST['cognome'],$_POST['datanascita'],$ldn,$_POST['sesso']);
            if(strcmp($cdf_ins,$cdf_cal) == 0)
            {
                $d=array('nome'=>$_POST['nome'],
                'cognome'=>$_POST['cognome'],
                'datanascita'=>$_POST['datanascita'],
                'ldn'=>$_POST['ldn'],
                'cdf'=>$cdf_ins,
                'sesso'=>$_POST['sesso'],
                'username'=>$_POST['username'],
                'pwd'=>$_POST['pwd']);   
            }      
        }
        return $d;
    }
}
?>