<?php
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Foundation/Gestione/Gsessione.php';
require_once 'Foundation/Futente.php';
require_once 'Foundation/Fconndb.php';
require_once 'View/VUtente.php';
require_once 'View/Vhome.php';
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
            //$sessione->UnsetSessione($u->get_id());  
            if($sessione->VerificaSessione('id_utente') == false)
            {
                $sessione->impSessione('id_utente',$u->get_id());
                return $u;
            }
            
        }
        else
        {
            $this->messaggio= 'credenziali sbagliate';
            return $this->messaggio; 
        }
        
    }

    public function InsUtente()
    {
        $vu=Gpreleva::getIstanza('Vhome');
        $Fu= new Futente();
        $a=$Fu->UtentiReg();
        $dreg=$vu->DatiReg();
        for($i=0;$i<sizeof($a);$i++)
        {
            if(strcmp($a[$i]->get_username(),$dreg['username']) !== 0 )
            {
                if($dreg!== null)
                { 

                    $Fu->InserisciDatiReg($dreg);
                    echo 'Avvenuta Registrazione';             
                }
            }
            else
            {
                echo 'Registrazione fallita. Usename già in uso';
                        
            }
        }
        
    }

    public function StoricoPaz()
    {
        $Fu= new Futente();
        $a=$Fu->UtentiReg();
        return $a;
    }
}
?>