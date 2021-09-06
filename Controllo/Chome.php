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
        if((strcmp($vl->getUser(),"") == 0) && (strcmp($vl->getPwd(),"") == 0))
        {
            $vl->caricaindex();
            if($vh->Registrazione())
            {                   
                $ur->InsUtente();
            }
        }    
        elseif($vl->Login())
        {   
            $arr=$ur->autenticazione($vl->getUser(),$vl->getPwd());
            if($arr->get_tipo() == 1)
            { 
                $vl->caricaTemplate('info',$this->infop(),'Admin.tpl'); 
            }
            else
            {
                $dati=array('username'=>$arr->get_username(),'nome'=>$arr->get_nome(),'cognome'=>$arr->get_cognome(),'cod_fisc'=>$arr->get_cdf(),'id'=>$arr->get_id());
                $vl->caricaTemplate('P',$dati,'Paziente.tpl'); 
                if($vl->Pre())
                {
                    $ur->InviaPrenotazione($arr->get_id());
                }      
            }

            if($vl->Logout())
            {
                $ur->getSessione()->UnsetSessione('id_utente');
            }         
        }
    }

    public function infop()
    {
        $ur= Gpreleva::getIstanza('Clogin'); 
        $tmp=$ur->StoricoPaz();
        for($i=0;$i<sizeof($tmp);$i++)
        {
            $info[$i]=array('id'=>$tmp[$i]->get_id(),
                    'nome'=>$tmp[$i]->get_nome(),
                    'cognome'=>$tmp[$i]->get_cognome(),
                    'datan'=>$tmp[$i]->get_datans(),
                    'ldn'=>$tmp[$i]->get_luogons(),
                    'cdf'=>$tmp[$i]->get_cdf(),
                    'tf'=>""); 
        }
        return $info;
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