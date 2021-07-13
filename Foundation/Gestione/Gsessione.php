<?php
class Gsessione 
{
    public function __construct() 
    {
        session_start();
        debug($_SESSION);
    }
    
    public function impSessione($c,$v)
    {
        $_SESSION[$c]=$v;
    }
    public function UnsetSessione($c)
    {
        unset($_SESSION[$c]);
    }
    public function VerificaSessione($c)
    {
        if(isset($_SESSION[$c]))
        {
            return $_SESSION[$c];
        }
        else
        {
            return false;
        }
    }
}
