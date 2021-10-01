
<?php

include 'Participants/bddparticipants.php';


if (isset($_POST['btn-modif-reponses'])) {
    //echo'ok';
    //var_dump($_POST);
    $reponse1=addslashes($_POST['reponse1']);
    $reponse2=addslashes($_POST['reponse2']);
    $reponse3=addslashes($_POST['reponse3']);
    $reponse4=addslashes($_POST['reponse4']);
    $reponse5=addslashes($_POST['reponse5']);
    
    $sql="UPDATE reponsegagnante SET question1='$reponse1', question2='$reponse2', question3='$reponse3', question4='$reponse4', question5='$reponse5'";
    $up=$bdd2->prepare($sql);
    if (!$up->execute()) {
      echo'error';
    }
    header('Location:http://localhost/jeux_concour_bleu_vif/Jeux2/admin/admin-index.php');
    die;
}