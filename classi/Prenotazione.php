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
    private $data_prenotazione;
    private $stato_conferma=false;
    private $utente;
    
    public function __construct($dtp) 
    {
        $this->data_prenotazione=$dtp;
    }
    
    /*
     * utente relativo alla prenotazione
     */
    public function getUtente()
    {
        return $this->utente;
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
