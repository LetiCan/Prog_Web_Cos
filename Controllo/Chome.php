<?php
require_once 'View/VUtente.php';
require_once 'View/Vhome.php';
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Clogin.php';
class Chome
{

    public function imp()
    {
       $ur= Gpreleva::getIstanza('Clogin'); 
       $vl= Gpreleva::getIstanza('VUtente');
       $vl->caricaindex();
       if($vl->getUser() == "" && $vl->getPwd() == "" ) 
       {
           echo 'pippo';
           

       }
       elseif($ur->autenticazione($vl->getUser(),$vl->getPwd()) !== null )
       {
           $arr=$ur->autenticazione($vl->getUser(),$vl->getPwd());
           $vl->caricaTemplate('username',$arr,'Admin.tpl');
       }
      
      

    }
}
?>