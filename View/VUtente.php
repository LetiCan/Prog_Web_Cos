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
        if(isset($_REQUEST['nome'],$_REQUEST['cognome'],$_REQUEST['datanascita'],$_REQUEST['ldn'],$_REQUEST['cdf'],$_REQUEST['sesso'],$_REQUEST['username'],$_REQUEST['pwd']))
        {
            $d=array($_REQUEST['nome'],$_REQUEST['cognome'],$_REQUEST['datanascita'],$_REQUEST['ldn'],$_REQUEST['cdf'],$_REQUEST['sesso'],$_REQUEST['username'],$_REQUEST['pwd']);
            foreach($d as $dto)
            {
                if(isset($_REQUEST[$dto]))
                {
                    $a[$dto]=$_REQUEST[$dto];
                }
            }
        }
        return $a;
    }
}
?>