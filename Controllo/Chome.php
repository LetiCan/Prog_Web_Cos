<?php
require 'View/VUtente.php';
require_once 'Foundation/Gestione/Gpreleva.php';
require 'Clogin.php';
class Chome
{

    private $layout;
    public function home()
    {
        $this->layout= USingleton::getIstanza('View.php');
        $this->layout->caricaindex('index.tpl');

    }
    public function imp()
    {
       $ur= USingleton::getIstanza('Clogin'); 
       $vl= USingleton::getIstanza('VUtente.php');
       if($vl->getUser() == "" && $vl->getPwd() == "" ) 
       {
           echo 'pippo';
           

       }
       elseif($ur->autentica($vl->getUser(),$vl->getPwd()) !== null )
       {
           $arr=$ur->autentica($vl->getUser(),$vl->getPwd());
           $vl->caricaTemplate('username',$arr,'Admin.tpl');
       }
      
      

    }
}
?>