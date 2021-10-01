<?php
session_start();
 if (!isset($_SESSION['btn-deco'])) {
    $_SESSION = array();
session_unset(); 
session_destroy();
header('Location:/Jeux_concour_bleu_vif/connexion/index.php');

die; 
 }
 
    
?>