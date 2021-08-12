 <?php 
require_once 'Foundation/Gestione/Gpreleva.php';
require_once 'Controllo/Chome.php';
$cix = Gpreleva::getIstanza('Chome');
$cix->home();
/* $v=new View();
 $v->caricaindex('index.tpl');
 <?php include 'filehtml\header.html'?>
    <br><br>
    <?php include 'filehtml\home.html'?>
    <br><br>
    <?php include 'filehtml\footer.html'?>	
 */
