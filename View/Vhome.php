<?php
require_once 'View.php';
class Vhome extends View
{
    private $layout;

    public function home()
    {
       return $this->layout->caricaindex('index.tpl');
    }
}
?>