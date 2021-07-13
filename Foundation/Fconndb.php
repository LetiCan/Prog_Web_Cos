<?php
class Impostazioni
{
    private $db;
    protected $tabella;
    protected $chiave;
    protected $classe;
    protected $autoincremento=false;

    public function __construct() 
    {
        global $configura;
        $this->connesione($configura['mysql']['host'],$configura['mysql']['dbname'],$configura['mysql']['user'],$configura['mysql']['pass']);
        
    }
    
    public function connessione($hostname,$dbname,$user,$pass)
    {
        try 
        {
            $this->db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /* echo "connessione ok";*/
        }
        catch (PDOException $e) 
        {
            echo "Errore: " . $e->getMessage();
        }   
        return true;
    }
 
    
    public function connclose() 
    {
       $this->db=null;
    }
    
}
   
