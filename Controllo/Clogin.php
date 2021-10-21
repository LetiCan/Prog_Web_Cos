<?php
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Foundation/Gestione/Gsessione.php';
require_once 'Foundation/Futente.php';
require_once 'Foundation/FPrenotazione.php';
require_once 'Foundation/FBacheca.php';
require_once 'Foundation/Fconndb.php';
require_once 'View/VUtente.php';
require_once 'View/Vhome.php';
class Clogin 
{
    private $username;
    private $password;
    private $utenteA;
    private $messaggio;
    private $sessione;
    
    public function autenticazione($us,$p)
    {
        $Fu = new Futente();
        $this->utenteA=$Fu->preleva_user($us,$p);             
        if(isset( $this->utenteA))
        {    
            $this->sessione = Gpreleva::getIstanza('Gsessione');     
            $this->sessione->impSessione($us,$this->utenteA->get_username()); 
            if($this->sessione->VerificaSessione($us) !== false)
            {              
                return  $this->utenteA;
            }
            
        }
        else
        {
            echo 'credenziali incorrette';
        }
        
    }

    public function caricaDosi()
    {
        $vu=Gpreleva::getIstanza('VUtente');
        $Fu= new Futente();
        $ds=$vu->getDose();
        if($ds !== null)
        {
            $Fu->carica_dosi($ds);
            echo 'ok';
        
        }
        else{
            echo 'nessun input ricevuto';
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

    public function InviaPrenotazione()
    {
        $vh=Gpreleva::getIstanza('Vhome'); 
        $Fp = new FPrenotazione();             
        $t=$this->RiepilogoPre(); 
        if(isset($t))
        {
            $datip=array('prov'=>$t['prov'],'tamp'=>$t['tamp'],'datapre'=>$t['datapre'],'id_utente'=>$t['id_utente']);
            $Fp->DatiPrenotazione($datip);
            echo 'Prenotazione riuscita';
        }
        else
        {
            echo 'Prenotazione fallita';
        } 
    }

    public function RiepilogoPre()
    {
        $vu=Gpreleva::getIstanza('VUtente');
        $temp=$vu->getPrenotazione(); 
        return $temp;

    }


    public function StoricoPaz()
    {
        $Fu= new Futente();
        $a=$Fu->UtentiReg();
        return $a;
    }

    public function AvvisiBacheca()
    {
        $Fb = new FBacheca();
        $bacheca = $Fb->preleva_avv();
        for($i=0;$i<sizeof($bacheca);$i++)
        {
            $infoA[$i]=array('data'=>$bacheca[$i]->get_datapubb(),
                    'ann'=>$bacheca[$i]->get_desc());
        }
        return $infoA;
    }

    public function getSessione($c)
    {
       if(isset($this->sessione))
       {
           $this->sessione->UnsetSessione($c);
       }
       else{
           echo 'nessuna sessione in corso';
       }
    }
    
    public function get_ute($u,$p)
    {
        $Fu= new Futente();
        $utente=$Fu->preleva_user($u,$p);
        return $utente;
    }


}
?>