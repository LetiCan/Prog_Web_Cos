<?php
require 'View.php';
class VUtente extends View 
{
    private $us;
    private $pw;
    public function getPwd()
    {
        
        if(isset($_POST['psw']))
        {
            $this->pw=$_POST['psw']; 
        }
        return $this->pw;
    }

    public function getUser()
    {
        if(isset($_POST['user']))
        {
            $this->us=$_POST['user'];
        }
        return $this->us;
    }

    
    public function getID()
    {
        if(isset($_POST['id']))
        {
           return $_POST['id'];
        }
        return false;
    }

    public function getPrenotazione()
    {
        if(isset($_POST['datapre'],$_POST['prov'],$_POST['tamp'],$_POST['lab'],$_POST['id']))
        {
           $dtp=array('datapre'=>$_POST['datapre'],'prov'=>$_POST['prov'],'tamp'=>$_POST['tamp'],'lab'=>$_POST['lab'],'id_utente'=>$_POST['id']);
        }
        return $dtp;
    }

    public function getDose()
    {
        if(isset($_POST['dose1']))
        {
           $dtp=array('std1'=>$_POST['dose1'],'id'=>$_POST['id']);
        }
        elseif(isset($_POST['dose2']))
        {
            $dtp=array('std2'=>$_POST['dose2'],'id'=>$_POST['id']);
        }
        return $dtp;
    }

    public function Submit()
    {
        if(isset($_POST['submit']))
        {
            return $_POST['submit'];
        }
        return false;
    }

}
?>