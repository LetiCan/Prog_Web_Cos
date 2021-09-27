<?php 
 //require_once 'View/VUtente.php';
 //require_once 'View/Vhome.php';
 //require_once 'View/VRegistrazione.php';
 require_once 'Foundation/Gestione/Gpreleva.php';
 //require_once 'Controllo/Clogin.php';
 require_once 'Foundation/Gestione/Gsessione.php';
 require_once 'Controllo/Chome.php';
 $ses = Gpreleva::getIstanza('Gsessione');
 $cix = Gpreleva::getIstanza('Chome');
 $cix->imp();  
?>