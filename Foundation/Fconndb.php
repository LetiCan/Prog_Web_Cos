<?php
require_once 'classi/Utente.php';
class Fconndb
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
        return $this->db;
    }
 
    public function preleva_user($u,$p)
    {
        $sdb=$this->connessione();
        $q=" SELECT * FROM ". $this->tabella." WHERE username= :us  AND pwd= :ps";
        $this->query_result=$sdb->prepare($q);
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
       // $sdb->connclose();
        return $utente;
    }

    public function UtentiReg()
    {
        $sdb=$this->connessione();
        $n=2;
        $i=0;
        $q=" SELECT * FROM ". $this->tabella." WHERE tipo=:tp";
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':tp',$n);
        $this->query_result->execute();
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
            $utente =new Utente($id,$user,$pws,$nome,$cognome,$dtn,$ln,$s,$cf,$tp,$std1,$std2);
            $array_ut[$i]=$utente;
            $i++;
        }
        return $array_ut;
        
    }

    public  function InserisciDatiReg($dati)
    {
        $sdb=$this->connessione();
        $n=2;
        $q="INSERT INTO ".$this->tabella."( tipo, username, pwd, nome, cognome, data_nascita, luogo_nascita, sesso, codice_fiscale)".
            "VALUES(:tp,:us,:ps,:nm,:cgn,:dtn,:ln,:sex,:cdf)";
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':tp',$n);
        $this->query_result->bindParam(':us',$dati['username']);
        $this->query_result->bindParam(':ps',$dati['pwd']);
        $this->query_result->bindParam(':nm',$dati['nome']);
        $this->query_result->bindParam(':cgn',$dati['cognome']);
        $this->query_result->bindParam(':dtn',$dati['datanascita']);
        $this->query_result->bindParam(':ln',$dati['ldn']);
        $this->query_result->bindParam(':sex',$dati['sesso']);
        $this->query_result->bindParam(':cdf',$dati['cdf']);
        $this->query_result->execute();
        $sdb=$this->connclose();
    }

    public function DatiPrenotazione($p)
    {
        $sdb=$this->connessione();
        $q="INSERT INTO ".$this->tabella."(provincia,tampone,lab,data_prenotazione,fk_utente)"."VALUES(:pr,:tp,:lb,:dp,:fku)"; 
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':pr',$p['prov']);
        $this->query_result->bindParam(':tp',$p['tamp']);
        $this->query_result->bindParam(':lb',$p['lab']);
        $this->query_result->bindParam(':dp',$p['datapre']);
        $this->query_result->bindParam(':fku',$p['id_utente']);
        $this->query_result->execute();
        $sdb=$this->connclose();

    }


    public function connclose() 
    {
       $this->db=null;
    }
    
}
   
