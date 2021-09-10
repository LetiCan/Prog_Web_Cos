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
        $sdb=$this->connessione();
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
    /*
        public function Avvisi($a)							//INSERIMENTO AVVISO BACHECA
	{
		$sdb=$this->connessione();
        $q="INSERT INTO ".$this->tabella."(data_pubblicazione,fk_utente)"."VALUES(:dpb,:fku)"; 
		$q="INSERT INTO ".$this->tabella."(id_avviso,data_pubblicazione,descrizione,fk_utente)"."VALUES(:ida,:dpb,:desc,:fku)";
		$this->query_result=$sdb->prepare($q);
		$this->query_result->bindParam(':ida',$a['id_avviso']);
		$this->query_result->bindParam(':dpb',$a['data_pubblicazione']);
		$this->query_result->bindParam(':desc',$a['descrizione']);
		$this->query_result->bindParam(':fku',$a['fk_utente']);
		$this->query_result->execute();
        $sdb=$this->connclose();
	
	}
	
	
	public function elimina_ut($us,$pwd)					//ELIMINA UTENTE
	{
		$sdb=$this->connessione();
		$q= "DELETE FROM".this->tabella."  WHERE "WHERE username= :us  AND pwd= :ps";
		$this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':us',$us);
        $this->query_result->bindParam(':ps',$pwd);
        $this->query_result->execute();
		$sdb->connclose();
	}
	
	
	public function elimina_pre($dtp,$fku)					//ELIMINA PRENOTAZIONE
	{
		$sdb=$this->connessione();
		$q= "DELETE FROM".this->tabella."  WHERE "WHERE data_prenotazione= :dp  AND fk_utente= :fku";
		$this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':dp',$dtp);
        $this->query_result->bindParam(':fku',$fku);
        $this->query_result->execute();
		$sdb->connclose();
	}
	
	
	
	public function elimina_avv($dpb,$fku)					//ELIMINA AVVISO
	{
		$sdb=$this->connessione();
		$q= "DELETE FROM".this->tabella."  WHERE "WHERE data_pubblicazione= :dpb  AND fk_utente= :fku";
		$this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':dpb',$dpb);
        $this->query_result->bindParam(':fku',$fku);
        $this->query_result->execute();
		$sdb->connclose();
	}
	
	
	public function modifica_ut($nm,$cgn,$dtn,$tp,$us,$ps,$ln,$sex,$cdf,$id)					//MODIFICA UTENTE
	{
		$sdb=$this->connessione();
		$q= "UPDATE utente SET ':nm'=$nm, ':cgn'=$cgn, ':dtn'=$dtn", ':tp'=$tp, ':us'=$us,':ps'=$ps, ':ln'=$ln, ':sex'=$sex, ':cdf'=$cdf".this->tabella."WHERE id_utente=:id";
		$this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':id',$id);
        $this->query_result->execute();
		$sdb->connclose();
	}
	
	public function modifica_dosi($id, $vacc,$num)					//MODIFICA VACCINI
	{
		$sdb=$this->connessione();
		$n=$num;
		if($n=="1")
		{
			$q= "UPDATE utente SET ':std1'=$vacc ".this->tabella."WHERE id_utente=:id";
			$this->query_result=$sdb->prepare($q);
			$this->query_result->bindParam(':id',$id);
			$this->query_result->execute();
			$sdb->connclose();
		}
		else
		{
			$q= "UPDATE utente SET ':std2' ".this->tabella."WHERE id_utente=:id";
			$this->query_result=$sdb->prepare($q);
			$this->query_result->bindParam(':id',$id);
			$this->query_result->execute();
			$sdb->connclose();
		}
		
	}
	
	public function modifica_avv($dpb,$fku,$desc)					//MODIFICA AVVISO
	{
		$sdb=$this->connessione();
		$q= "UPDATE utente SET ':desc'=$desc".this->tabella."WHERE fk_utente=':fku' AND data_pubblicazione=':dpb'";
		$this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':dpb',$dpb);
		$this->query_result->bindParam(':fku',$fku);
        $this->query_result->execute();
		$sdb->connclose();
	}
    public function Ricerca_perdata($d)				//RICERCA PRENOTAZIONE CON DATA
	{
		$sdb=$this->connessione();
		$q="SELECT data_prenotazione FROM ".$this->tabella."WHERE data_prenotazione=$d";
		$this->query_result=$sdb->prepare($q);
		$this->query_result->bindParam(':dp',$d['datapre']);
		$this->query_result->execute();
		while($row=$this->query_result->fetch())
        {
            $pr=$row['provincia'];
            $tp=$row['tampone'];
            $lb=$row['lab'];
            $dp=$row['data_prenotazione'];
            $fku=$row['fk_utente'];
            $prenotazione =new Prenotazione($pr,$tp,$lb,$dp,$fku);
            $array_pre[$i]=$prenotazione;
            $i++;
        }
		$sdb->connclose();
        return $array_pre;
	}
	
	
	public function paz_green()								//ELENCO PAZIENTI CON GREEN PASS
	{
		$sdb=$this->connessione();
		$val="true";
		$q="SELECT * FROM ".$this->tabella."WHERE std1=$val AND std2=$val;
		$this->query_result=$sdb->prepare($q);
		$this->query_result->bindParam(':std1',$val);
		$this->query_result->bindParam(':std2',$val);
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
            $array_green[$i]=$utente;
            $i++;
        }
		$sdb->connclose();
        return $array_green;
	}	
	
	public function preleva_avv($dpb)						//ELENCO AVVISI CON DATA
    {
        $sdb=$this->connessione();
        $q=" SELECT * FROM ". $this->tabella." WHERE data_pubblicazione=':dpb'";
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':dpb',$d);
        $this->query_result->execute();
        //$row=$this->qresult->fetchAll();
        while($row=$this->query_result->fetch())
        {
            $id_avviso=$row['id_avvisoa'];
            $dpb=$row['data_pubblicazione'];
            $desc=$row['descrizione'];
            $fku=$row['fk_utente'];

        }
        $avviso=new Avviso($id_avviso,$dpb,$desc,$fku);
       // $sdb->connclose();
        return $avviso;
    }
    */
}
   
