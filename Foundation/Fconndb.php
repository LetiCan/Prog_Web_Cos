<?php
require_once 'classi/Utente.php';
require_once 'classi/Bacheca.php';
require_once 'classi/Passaporto.php';
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
        $q="SELECT * FROM ".$this->tabella." WHERE tipo= :tp";
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
        $sdb=$this->connclose();
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
        $q="INSERT INTO ".$this->tabella."(provincia,tampone,data_prenotazione,fk_utente)"."VALUES(:pr,:tp,:dp,:fku)"; 
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':pr',$p['prov']);
        $this->query_result->bindParam(':tp',$p['tamp']);
        $this->query_result->bindParam(':dp',$p['datapre']);
        $this->query_result->bindParam(':fku',$p['id_utente']);
        $this->query_result->execute();
        $sdb=$this->connclose();

    }

    public function preleva_avv()					
    {
        $sdb=$this->connessione();
        $i=0;
        $q=" SELECT * FROM ". $this->tabella ;
        $this->query_result=$sdb->prepare($q);
        $this->query_result->execute();
        //$row=$this->qresult->fetchAll();
        while($row=$this->query_result->fetch())
        {
            $id_avviso=$row['id_avviso'];
            $dpb=$row['data_pubblicazione'];
            $desc=$row['descrizione'];
            $fku=$row['fk_utente'];
            $avviso=new Bacheca($id_avviso,$dpb,$desc,$fku);
            $array_av[$i]=$avviso;
            $i++;

        }
        $sdb=$this->connclose();
        return $array_av;
    }

    public function carica_dosi($dose)					
	{
		$sdb=$this->connessione();
        $q1="SELECT std1,std2 FROM ".$this->tabella." WHERE id_utente=:id";
        $this->query_result=$sdb->prepare($q1);
        $this->query_result->bindParam(':id',$dose['id']);	
        $this->query_result->execute();
        while($row=$this->query_result->fetch())
        {
            $std1=$row['std1'];
            $std2=$row['std2'];
            $vacc=array($std1,$std2);
        }
        if(!isset($vacc[0]) || !isset($vacc[1]))  
        {
            if((strcmp($dose['std1'],'no') == 0 ) || (strcmp($dose['std1'],'si') == 0 ))
            {
                $q= "UPDATE ".$this->tabella." SET std1 = :d1"." WHERE id_utente = :idu";
                $this->query_result=$sdb->prepare($q);
                $this->query_result->bindParam(':d1',$dose['std1']);		
                $this->query_result->bindParam(':idu',$dose['id']);
                $this->query_result->execute();
            }
            elseif((strcmp($dose['std2'],'no') == 0 ) || (strcmp($dose['std2'],'si') == 0 ))
            {
                $q= "UPDATE ".$this->tabella." SET std2=:d2"." WHERE id_utente=:idu";
                $this->query_result=$sdb->prepare($q);
                $this->query_result->bindParam(':d2',$dose['std2']);
                $this->query_result->bindParam(':idu',$dose['id']);
                $this->query_result->execute();
            }

        }        
		$sdb=$this->connclose();
	}

    public function InsGP($data_rilascio,$stato,$idute)
    {
        $sdb=$this->connessione();
        $q="INSERT INTO ".$this->tabella."(data_rilascio,stato_approvazione,fk_utente)"."VALUE(:dtr,:st,:fku)";
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':dtr',$data_rilascio);
        $this->query_result->bindParam(':st',$stato);
        $this->query_result->bindParam(':fku',$idute);
        $this->query_result->execute();
        $sdb=$this->connclose();

    }

    public function UtentiGreenPass()
    {
        $sdb=$this->connessione();
        $i=0;
        $q="SELECT fk_utente FROM ".$this->tabella;
        $this->query_result=$sdb->prepare($q);
        $this->query_result->execute();
        while($row=$this->query_result->fetch())
        {
            $fku=$row['fk_utente'];
            $array_fk[$i]=$fku;
            $i++;
        }
        $sdb=$this->connclose();
        return $array_fk;
    }

    public function Preleva_GreenPass($id_utente)
    {
        $sdb=$this->connessione();
        $q="SELECT * FROM ".$this->tabella." WHERE fk_utente=:idu";
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':idu',$id_utente);
        $this->query_result->execute();
        while($row=$this->query_result->fetch())
        {
            $cdp=$row['cod_passaporto'];
            $dtr=$row['data_rilascio'];
            $stato=$row['stato_approvazione'];
            $fku=$row['fk_utente'];
        }
        $Pasp= new Passaporto($cdp,$dtr,$stato,$fku);
        $sdb=$this->connclose();
        return $Pasp;
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
     public function Conta_Prenotazioni($id_utente)
    {
        $sdb=$this->connessione();
        $n=2;
        $q="SELECT COUNT(fk_utente)".$this->tabella."WHERE fk_utente=:idu AND tipo=:n";
        $this->query_result=$sdb->prepare($q);
        $this->query_result->bindParam(':idu',$id_utente);
        $this->query_result->bindParam(':n',$n);
        $this->query_result->execute();
        $row=$this->qresult->fetchAll();
        $sdb=$this->connclose();
        return $row;
    }

    */
}
   
