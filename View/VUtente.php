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
    
}
?>