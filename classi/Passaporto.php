<?php
class Passaporto 
{
   private $cod_passaporto;
   private $data_richiesta;
   private $data_rilascio;
   private $utente;
   private $stato_di_approvazione;
   
   public function __construct($cd,$dt,$sta,$ut) 
   {
      $this->cod_passaporto=$cd;
      $this->data_rilascio=$dt;
      $this->stato_di_approvazione=$sta;
      $this->utente=$ut;
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
