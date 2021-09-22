<?php
class Passaporto 
{
   private $cod_passaporto;
   private $data_richiesta;
   private $data_rilascio;
   private $utente;
   private $stato_di_approvazione=false;
   
   public function __construct() 
   {
       $this->data_richiesta=date('D-M-Y');
   }
   
   public function getCod() 
   {
       return $this->cod_passaporto;
       
   }
   public function getDataRichiesta() 
   {
       return $this->data_richiesta;
       
   }
   public function getDataRilascio() 
   {
       return $this->data_rilascio;
       
   }
   public function getUtente() 
   {
       return $this->utente;
       
   }
   public function getStatoApprovazione() 
   {
       return $this->stato_di_approvazione;
       
   }
   public function setStatoApprivazione()
   {
       $this->stato_di_approvazione=true;
   }
   public function setDataRilascio() 
   {
       $this->data_rilascio=date('D-M-Y');
   }
}
