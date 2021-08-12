<?php
require_once 'Fconndb.php';
class Futente extends Fconndb
{
    public function __construct() 
    {
        $this->tabella='utente';
        $this->chiave='id_utente';
        $this->classe='Utente';
        Gpreleva::getIstanza('Fconndb');
    }
    
    
}
?>