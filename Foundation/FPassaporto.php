<?php

class FPassaporto extends Fconndb
{
    public function __construct()
    {
        $this->tabella='passaporto';
        $this->chiave='cod_pass';
        $this->classe='Passaporto';
        $this->autoincremento=true;
        Gpreleva::getIstanza('Fconndb');
    }
}
