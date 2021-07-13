<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bacheca
 *
 * @author danue
 */
class Bacheca 
{
    private $data_pubblicazione;
    private $descrizione;
    private $utente;
    
    public function __construct($ds,$ut) 
    {
        $this->data_pubblicazione=date('D-M-Y');
        $this->utente=$ut;
        $this->descrizione=$ds;
    }
    
    public function get_datapubb()
    {
        return $this->data_pubblicazione;
    }
    
    public function get_desc()
    {
        return $this->descrizione;
    }
    
    public function get_utente()
    {
        return $this->utente;
    }
    
    public function set_datapbb()
    {
       $this->data_pubblicazione=date('D-M-Y');
    }
}
