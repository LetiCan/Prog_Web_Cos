<?php
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Foundation/Gestione/Gsessione.php';
require_once 'Foundation/Futente.php';
require_once 'Foundation/Fconndb.php';
require_once 'View/VUtente.php';
class Clogin
{
    private $username;
    private $password;
    private $messaggio;
    
    public function autenticazione($u,$p)
    {
        
        $Fu = new Futente();
        $u=$Fu->preleva_user($u,$p);
        if(isset($u))
        {
            $sessione = Gpreleva::getIstanza('Gsessione');
            $sessione->impSessione('id_utente',$u->get_id());
            if($sessione->VerificaSessione('id_utente')!== false)
            {
                return $u;
            }
            
        }
        else
        {
            $this->messaggio= 'credenziali sbagliate';
        }
        
    }

    public function InsUtente()
    {
        $vu=Gpreleva::getIstanza('VUtente');
        $Fu= new Futente();
        $dreg=$vu->DatiReg();
        if(isset($dreg))
        { 

            $Fu->InserisciDatiReg($dreg);
            $this->messaggio='Avvenuta Registrazione';             
        }
        else
        {
            $this->messaggio='Registrazione fallita';
                      
        }
        return $this->messaggio;
    }
}
?>