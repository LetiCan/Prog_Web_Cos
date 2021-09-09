<?php
require_once 'View.php';
class VRegistrazione extends View
{
    private $layout;

    public function impostaReg($ly)
    {
        $this->layout=$this->caricadati('layoutreg',$ly);
        return $this->layout;  
    }
}
?>