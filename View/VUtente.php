<?php
require 'View.php';
class VUtente extends View 
{
    public function getPwd()
    {
        
        if(isset($_REQUEST['psw']))
        {
            return $_REQUEST['psw'];
        }
        /*else
        {
           echo 'niet';
        }*/
    }
    public function getUser()
    {
        if(isset($_REQUEST['user']))
        {
            return $_REQUEST['user'];
        }
       /* else
        {
            echo 'niet';
        }*/
    }
    

    public function DatiReg()
    {
        $a=array();
        $d=array('nome','cognome','datanascita','ldn','cdf','sesso','username','pwd');
        foreach($d as $dto)
        {
            if(isseet($_REQUEST[$dto]))
            {
                $a[$dto]=$_REQUEST[$dto];
            }
        }
        return $a;
    }
}
?>