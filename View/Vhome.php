<?php
require_once 'View.php';
class Vhome extends View
{

    public function Registrazione()
    {
      if(isset($_POST['rgs']))
      {
          return $_POST['rgs'];
      }
      return false;
    }


    public function DatiReg()
    {
        if(isset($_POST['nome'],$_POST['cognome'],$_POST['datanascita'],$_POST['ldn'],$_POST['cdf'],$_POST['sesso'],$_POST['username'],$_POST['pwd']))
        {
            $d=array('nome'=>$_POST['nome'],
            'cognome'=>$_POST['cognome'],
            'datanascita'=>$_POST['datanascita'],
            'ldn'=>$_POST['ldn'],
            'cdf'=>$_POST['cdf'],
            'sesso'=>$_POST['sesso'],
            'username'=>$_POST['username'],
            'pwd'=>$_POST['pwd']);
        }
        return $d;
        
    }
}
?>