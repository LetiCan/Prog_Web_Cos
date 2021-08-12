<?php
require 'View/VUtente.php';
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Clogin.php';
class Chome
{

    private $layout;
    public function home()
    {
        $this->layout= Gpreleva::getIstanza('VUtente');
        $this->layout->caricaindex('index.tpl');

    }
    public function imp()
    {
       $ur= Gpreleva::getIstanza('Clogin'); 
       $vl= Gpreleva::getIstanza('VUtente.php');
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