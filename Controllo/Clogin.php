<?php
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Foundation/Gestione/Gsessione.php';
require_once 'Foundation/Futente.php';
require_once 'Foundation/Fconndb.php';
class Clogin
{
    private $username;
    private $password;
    
    public function autenticazione($u,$p)
    {
        
        $Fu = new Futente();
        $u=$Fu->preleva_user($u,$p);
        if(!isset($u))
        {
            $sessione = Gpreleva::getIstanza('Gsessione');
            $sessione->impSessione('id_utente',$u->get_id());
            return $u;
        }
        else
        {
            echo 'credenziali sbagliate';
        }
        
    }
}
?>