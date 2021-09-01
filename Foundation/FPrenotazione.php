<?php

class FPrenotzione extends Fconndb
{
    public function __construct()
    {
        $this->tabella='prenotazione';
        $this->chiave='cod_prenotazione';
        $this->classe='Prenotazione';
        $this->autoincremento=true;
        Gpreleva::getIstanza('Fconndb');
    }
}
