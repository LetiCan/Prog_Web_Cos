<?php
class Utente 
{
	private $id_ut;
	private $username;
	private $password;
	private $nome;
	private $cognome;
	private $dtn;
	private $luogon;
	private $sesso;
	private $cdf;
	private $tipo;
	private $std1;
	private $std2;
	
	public function __construct($id,$us,$pwd,$nm,$cgn,$dtn,$lgn,$sex,$cdf,$tp,$s1,$s2)
	{
		$this->id_ut=$id;
		$this->username = $us;
		$this->password = $pwd;
		$this->nome = $nm;
		$this->cognome = $cgn;
		$this->dtn = $dtn;
		$this->luogon = $lgn;
		$this->sesso = $sex;
		$this->cdf = $cdf;
		$this->tipo = $tp;
		$this->std1 = $s1;
		$this->std2 = $s2;
	}
	
    public function get_id()
	{
		return $this->id_ut;
	}
        
	public function get_tipo()
	{
		return $this->tipo;
	}
	public function get_username()
	{
		return $this->username;
	}
	public function get_nome()
	{
		return $this->nome;
	}
	public function get_cognome()
	{
		return $this->cognome;
	}
	public function get_cdf()
	{
		return $this->cdf;
	}
	public function get_sex()
	{
		return $this->sesso;
	}
	public function get_eml()
	{
		return $this->email;
	}
	public function get_password()
	{
		return $this->password;
	}
	public function get_datans()
	{
		return $this->dtn;
	}
	public function get_luogons()
	{
		return $this->luogon;
	}
	public function set_std1()
	{
		$this->std1=true;
	}
	public function set_std2()
	{
		$this->std2=true;
	}
        /*public function Registrazione($db)
	{
		//controllo dello user
		$checkuser = filter_var($this->username,FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => "/^[a-z\d_]{3,20}$/i"]]);
		if($checkuser===false)
		{
			$mex='user non valido';
		}
		elseif($this->password < 8 || $this->password > 20)
		{
			$mex='password non valida';
		}
		else
		{
			$cpwd=password_hash($this->password,md5);
			$qr='SELECT codice_fiscale FROM utente WHERE username= :us';
			$sql=$db->prepare($qr);
			$sql->bindParam(':us',$this->username);
			$sql->execute();
			
			$u = $sql->fetchAll(PDO::FETCH_ASSOC);
			
			if(count($u) > 0)
			{
				$mex='user gia in uso';
			}
			else
			{
				$qr='INSERT INTO utente (username,pwd,nome,cognome,data_nascita,luogo_nascita,sesso,codice_fiscale,tipo) VALUES (:username,:pwd,:nome,:cognome,:datanascita,:ldn,:sesso,:cdf,:tp)';
				$sql=$db->prepare($qr);
				$sql->bindParam(':username',$this->username);
				$sql->bindParam(':pwd',$cpwd);
				$sql->bindParam(':nome',$this->nome);
				$sql->bindParam(':cognome',$this->cognome);
				$sql->bindParam(':datanascita',$this->dtn);
				$sql->bindParam(':ldn',$this->luogon);
				$sql->bindParam(':sesso',$this->sesso);
				$sql->bindParam(':cdf',$this->cdf);
				$sql->bindParam(':tp',$this->tipo);
				$sql->execute();
				
				if ($sql->rowCount() > 0) 
				{
					$mex = 'Registrazione eseguita con successo';
				} 
				else 
				{
					$mex = 'Problemi con la registrazione';
				}
			}
		}
		
		printf($mex, '<a href="../filehtml/Reg.html">torna indietro</a>');
		
	}
	
	public function Login()
	{
		
		
	}*/
	
/*
	
	public function ReimpostaPsw()
	{
		echo "Inserisci la risposta segreta: ";
		$cds=fgets(STDIN);
		if($rsp==$cds)
		{
			echo "Inserisci la nuova Password: ";
			$newpsw=fgets(STDIN);
			$this->set_pdw($newpsw);
			echo "Password Reimpostata";
		}	
	}
	public function set_pdw($npdw) 
	{
		$this->password = $npdw;
	}

	public function toString()
	{
		return $this->nome.":".$this->cognome.":".$this->cdf.":".$this->sesso.":".$this->email.":".$this->password.":".$this->dtn.":".$this->luogon;
	}
	
	*/
}
