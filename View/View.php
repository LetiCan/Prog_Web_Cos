<?php
require_once ('lib/Smarty.class.php');
class View extends Smarty
{
    public function __construct() 
    {
        parent::__construct();
        $this->setTemplateDir('tmpl/templates');   
        $this->setCompileDir('tmpl/templates_c');
        $this->setCacheDir('tmpl/cache');
        $this->setConfigDir('tmpl/configs');
    }
    
    
    public function caricaindex()
    {
        $this->display('index.tpl');
    }
    
    public function caricaTemplate($placeholder,$dt,$tmpl)
    {
        $this->assign($placeholder , $dt); 
        $this->display($tmpl);
    }

   /* public function caricaDati($placeholder,$dt)
    {
        $this->assign($placeholder , $dt);

    }*/
    
}
?>