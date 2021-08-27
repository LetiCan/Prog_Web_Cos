<?php
require_once 'View.php';
class Vhome extends View
{
    private $layout_reg;

    public function Registrazione()
    {
      $this->layout_reg=$this->showTmp('Registrazione.tpl');
      if(isset($this->layout_reg))  
      {
          return true;
      }
      else{
          return false;
      }
     
    }
    public function DatiReg()
    {
        if(isset($_POST['nome'],$_POST['cognome'],$_POST['datanascita'],$_POST['ldn'],$_POST['cdf'],$_POST['sesso'],$_POST['username'],$_POST['pwd']))
        {
            $d=array($_POST['nome'],$_POST['cognome'],$_POST['datanascita'],$_POST['ldn'],$_POST['cdf'],$_POST['sesso'],$_POST['username'],$_POST['pwd']);
         /* foreach($d as $dto)
            {
                if(isset($_POST[$dto]))
                {
                    $a[$dto]=$_POST[$dto];
                }
            }*/
            
        }
        return $d;
        
    }
}
?>