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
            return $u;
        }
        else
        {
            $this->messaggio= 'credenziali sbagliate';
        }
        
    }

    public function InsUtente()
    {
        $vu=Gpreleva::getIstanza('VUtente');
        $dreg=$vu->DatiReg();
        $Fu= new Futente();
        $ut=$Fu->preleva_user($dreg['username'],$dreg['pwd']);
        if(iseet($ut))
        {
            $this->messaggio='Utente Esistente';
        }
        else
        {
            $Fu->InserisciDati($dreg);
        }
    }
}
?>