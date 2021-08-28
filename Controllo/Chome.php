<?php
require_once 'View/VUtente.php';
require_once 'View/Vhome.php';
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Clogin.php';
class Chome
{

    public function imp()
    {
        $vh= Gpreleva::getIstanza('Vhome');     
        $ur= Gpreleva::getIstanza('Clogin'); 
        $vl= Gpreleva::getIstanza('VUtente'); 
        $vl->caricaindex();
        if($vl->getUser() == "" && $vl->getPwd() == "")
        {
            if($vh->Registrazione())
            {
                    
                $ur->InsUtente();
            
            }
        }    
        else
        {   
            $arr=$ur->autenticazione($vl->getUser(),$vl->getPwd());
            if($arr->get_tipo()==1)
            {
                $vl->caricaTemplate('username',$arr->get_username(),'Admin.tpl'); 
            }
            else
            {
                $dati=array('username'=>$arr->get_username(),'nome'=>$arr->get_nome(),'cognome'=>$arr->get_cognome(),'cod_fisc'=>$arr->get_cdf());
                $vl->caricaTemplate('P',$dati,'Paziente.tpl');
            }         
        }
    }

  /*  public function smista() {
        $view=USingleton::getInstance('VHome');
        switch ($view->getController()) {
            case 'registrazione':
                $CRegistrazione=USingleton::getInstance('CRegistrazione');
                return $CRegistrazione->smista();
            case 'ricerca':
                $CRicerca=USingleton::getInstance('CRicerca');
                return $CRicerca->smista();
            case 'ordine':
                $COrdine=USingleton::getInstance('COrdine');
                return $COrdine->smista();
            default:
                $CRicerca=USingleton::getInstance('CRicerca');
                return $CRicerca->ultimiArrivi();
        }
    }
    */  
       
}
?>