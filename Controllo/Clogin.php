<?php
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Foundation/Gestione/Gsessione.php';
require_once 'Foundation/Futente.php';
require_once 'Foundation/FPrenotazione.php';
require_once 'Foundation/Fconndb.php';
require_once 'View/VUtente.php';
require_once 'View/Vhome.php';
class Clogin
{
    private $username;
    private $password;
    private $messaggio;
    private $sessione;
    
    public function autenticazione($u,$p)
    {
        $Fu = new Futente();
        $u=$Fu->preleva_user($u,$p);             
        if(isset($u))
        {    
            $this->sessione = Gpreleva::getIstanza('Gsessione');     
            $this->sessione->impSessione("username",$u->get_username()); 
            if($this->sessione->VerificaSessione("username") !== false)
            {
                
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
        $conta=0;      
        if($dreg !== null)
        {
            if(isset($a))
            {
                for($i=0;$i<sizeof($a);$i++)
                {
                    if(strcmp($dreg['username'],$a[$i]->get_username()) == 0 )
                    { 
                        $conta++;  
                    } 

                }
                if($conta > 0)
                {
                    echo 'Registrazione fallita. Usename già in uso';

                }
                else{
                    $Fu->InserisciDatiReg($dreg);
                    echo 'Avvenuta Registrazione';
                   
                }
            }
        }
    }

    public function InviaPrenotazione($idut)
    {
        $vu=Gpreleva::getIstanza('VUtente');
        $Fp = new FPrenotazione();
        $temp=$vu->getPrenotazione();
        $datip=array('prov'=>$temp['prov'],'tamp'=>$temp['tamp'],'lab'=>$temp['lab'],'datapre'=>$temp['datapre'],'id_utente'=>$idut);
        if(isset($datip))
        {
            $Fp->DatiPrenotazione($datip);
            echo 'Prenotazione riuscita';
        }
        else
        {
            echo 'Prenotazione fallita';
        }
    }

    public function StoricoPaz()
    {
        $Fu= new Futente();
        $a=$Fu->UtentiReg();
        return $a;
    }

    public function getSessione()
    {
        return $this->sessione;
    }
}
?>