<?php 

include '../../connexion/config.php';
if (!isConnect()) {
   header('Location:../../connexion/index.php');
  die;
}
include 'Participants/bddparticipants.php';

$_SESSION['suppr']=1;


 $sql= "DELETE FROM participants";
 var_dump($sql);
 
 $supp=$bdd2->prepare($sql);

 if (!$supp->execute()) {
    $_SESSION['suppr']=0;
    echo'error';
    die;
 }
 
 header('Location:http://localhost/jeux_concour_bleu_vif/Jeux1/admin/admin-index.php');
 
