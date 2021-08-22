<?php
require_once 'Gestione/Gpreleva.php';
require_once 'Fconndb.php';

class Futente extends Fconndb
{
    public function __construct() 
    {
        $this->tabella='utente';
        $this->chiave='id_utente';
        $this->classe='Utente';
        $this->autoincremento=true;
        Gpreleva::getIstanza('Fconndb');
    }
    
    
}
?>