<?php

class FBacheca extends Fconndb
{
    public function __construct() 
    {
        $this->tabella='bacheca';
        $this->chiave='id_avviso';
        $this->classe='Bacheca';
        $this->autoincremento=true;
        Gpreleva::getIstanza('Fconndb');
		//commentonosenseprovakkk
    }
    
}
