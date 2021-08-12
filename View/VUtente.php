<?php
require 'View.php';
class VUtente extends View 
{
    public function getPwd()
    {
        
        if(isset($_REQUEST['password']))
        {
            return $_REQUEST['password'];
        }
        /*else
        {
           echo 'niet';
        }*/
    }
    public function getUser()
    {
        if(isset($_REQUEST['utente']))
        {
            return $_REQUEST['utente'];
        }
       /* else
        {
            echo 'niet';
        }*/
    
}
