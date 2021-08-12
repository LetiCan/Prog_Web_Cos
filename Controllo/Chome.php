<?php
require_once 'View/VUtente.php';
require_once 'View/Vhome.php';
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Clogin.php';
class Chome
{

    /*public function home()
    {
        $this->layout= Gpreleva::getIstanza('VUtente');
        $this->layout->caricaindex('index.tpl');

    }*/
    public function imp()
    {
       $h= Gpreleva::getIstanza('Vhome');
       $h->home();
       $ur= Gpreleva::getIstanza('Clogin'); 
       $vl= Gpreleva::getIstanza('VUtente');
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