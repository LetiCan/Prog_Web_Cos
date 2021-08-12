<?php
require_once 'classi/Utente.php';
class Impostazioni
{
    private $db;
    private $qury_result;
    protected $tabella;
    protected $chiave;
    protected $classe;
    protected $autoincremento=false;

    public function __construct() 
    {
       /* global $configura;
        $this->connesione($configura['mysql']['host'],$configura['mysql']['dbname'],$configura['mysql']['user'],$configura['mysql']['pass']);
      */  
    }
    
    public function connessione()
    {
        try 
        {
            $hostname='localhost';
            $database='test';
            $password='123';
            $user='pippo';
            $this->db = new PDO ("mysql:host=$hostname;dbname=$database", $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /* echo "connessione ok";*/
        }
        catch (PDOException $e) 
        {
            echo "Errore: " . $e->getMessage();
        }   
        //return true;
    }
 
    public function preleva_user($u,$p)
    {
        $this->connessione();
        $q=" SELECT * FROM ". $this->tabella." WHERE user= :us  AND password= :ps";
        $this->query_result=$this->db->prepare($q);
        $this->query_result->bindParam(':us',$u);
        $this->query_result->bindParam(':ps',$p);
        $this->query_result->execute();
        //$row=$this->qresult->fetchAll();
         while($row=$this->query_result->fetch())
        {
            $id=$row['id_utente'];
            $user=$row['username'];
            $pws=$row['pwd'];
            $nome=$row['nome'];
            $cognome=$row['cognome'];
            $dtn=$row['data_nascita'];
            $ln=$row['luogo_nascita'];
            $s=$row['sesso'];
            $cf=$row['codice_fiscale'];
            $tp=$row['tipo'];
            $std1=$row['std1'];
            $std2=$row['std2'];

        }
        $utente =new Utente($id,$user,$pws,$nome,$cognome,$dtn,$ln,$s,$cf,$tp,$std1,$std2);
        return $utente;
        
        //echo $id." ".$user." ".$pws." ".$nome;
        //return $row;  
    }
    public function connclose() 
    {
       $this->db=null;
    }
    
}
   
