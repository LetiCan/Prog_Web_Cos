<?php

class FPassaporto extends Fconndb
{
    public function __construct()
    {
        $this->tabella='passaporto';
        $this->chiave='cod_passaporto';
        $this->classe='Passaporto';
        $this->autoincremento=true;
        Gpreleva::getIstanza('Fconndb');
    }
}
