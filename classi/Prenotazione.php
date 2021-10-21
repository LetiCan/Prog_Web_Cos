<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Prenotazione
 *
 * @author danue
 */
class Prenotazione 
{
    private $cod_prenotazione;
    private $prov;
    private $tipotamp;
    private $data_prenotazione;
    private $stato_conferma=false;
    private $utente;
    
    public function __construct($dtp,$pr,$tt) 
    {
        $this->data_prenotazione=$dtp;
        $this->prov=$pr;
        $this->tipotamp=$tt;
    }
    
    /*
     * utente relativo alla prenotazione
     */
    public function getUtente()
    {
        return $this->utente;
    }

    public function getProv()
    {
        return $this->prov;
    }

    public function getTamp()
    {
        return $this->tipotamp;
    }
  
    public function getStato()
    {
        return $this->stato_conferma;
    }
    
    public function getCodicePre()
    {
        return $this->cod_prenotazione;
    }
    
    public function setStato()
    {
        $this->stato_conferma=true;
    }
}
