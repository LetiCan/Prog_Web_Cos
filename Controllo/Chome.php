<?php
require_once 'View/VUtente.php';
require_once 'View/Vhome.php';
require_once 'View/VRegistrazione.php';
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Clogin.php';
class Chome
{
    public function imp()
    {
        $vh= Gpreleva::getIstanza('Vhome'); 
        //$vr= Gpreleva::getIstanza('VRegistrazione');    
        $ur= Gpreleva::getIstanza('Clogin'); 
        $vl= Gpreleva::getIstanza('VUtente');       
        switch($vl->Submit())
        {
            case 'Accedi':
                $arr=$ur->autenticazione($vl->getUser(),$vl->getPwd());  
                if(isset($arr))
                {
                    if($arr->get_tipo() == 1)
                    { 
                        $vl->caricaTemplate('info',$this->infop(),'Admin.tpl'); 
                    }
                    else
                    {
                        $dati=array('username'=>$arr->get_username(),'nome'=>$arr->get_nome(),'cognome'=>$arr->get_cognome(),'cod_fisc'=>$arr->get_cdf(),'id'=>$arr->get_id());
                        $vl->caricaTemplate('P',$dati,'Paziente.tpl'); 
                    }                              
                }
                break;
            case 'Invia':
                $ur->InviaPrenotazione();
                break;
            case 'carica':
                $ur->caricaDosi();
                break;
            case 'Registrati':
                $ur->InsUtente();
                break; 
            case 'Logout':
                $this->Logout($vl->getUser());
                break;
            default :
                $vh->caricaTemplate('avv',$ur->AvvisiBacheca(),'index.tpl');
                break;
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

    public function Logout($c)
    {
        $vl= Gpreleva::getIstanza('VUtente');
        $ur= Gpreleva::getIstanza('Clogin');  
        $ur->getSessione($c);
        header('Location:index.php');         
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