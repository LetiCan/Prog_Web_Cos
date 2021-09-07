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

    public function getPrenotazione()
    {
        if(isset($_POST['datapre'],$_POST['prov'],$_POST['tamp'],$_POST['lab']))
        {
           $dtp=array('datapre'=>$_POST['datapre'],'prov'=>$_POST['prov'],'tamp'=>$_POST['tamp'],'lab'=>$_POST['lab']);
        }
        return $dtp;
    }

    
    public function Logout()
    {
      if(isset($_POST['lgo']))
      {
          return $_POST['lgo'];
      }
      return false;
    }

    public function Pre()
    { 
        if(isset($_POST['invia']))
        {
            return $_POST['invia'];
        }
        return false;
    }

}
?>