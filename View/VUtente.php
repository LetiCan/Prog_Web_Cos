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
        /*else
        {
           echo 'niet';
        }*/
    }
    public function getUser()
    {
        if(isset($_POST['user']))
        {
            $this->us=$_POST['user'];
        }
        return $this->us;
       /* else
        {
            echo 'niet';
        }*/
    }
    

}
?>