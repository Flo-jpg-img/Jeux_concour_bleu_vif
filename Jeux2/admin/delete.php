<?php 
session_start();
$_SESSION['suppr']=1;
include 'Participants/bddparticipants.php';

 $sql= "DELETE FROM participants";
 
 $supp=$bdd2->prepare($sql);

 if (!$supp->execute()) {
    $_SESSION['suppr']=0;
    echo'error';
    die;
 }
 
 header('Location:localhost/jeux_concour_bleu_vif/Jeux2/admin/admin-index.php');
 
