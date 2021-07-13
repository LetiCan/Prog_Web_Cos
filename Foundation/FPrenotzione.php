<?php

class FPrenotzione extends Fconndb
{
    public function __construct()
    {
        $this->tabella='prenotazione';
        $this->chiave='cod_pre';
        $this->classe='Prenotazione';
        $this->autoincremento=true;
        Gpreleva::getIstanza('Fconndb');
    }
}
