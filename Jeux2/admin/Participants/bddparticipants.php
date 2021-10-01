<?php
$dsn = 'mysql:dbname=inscritjeux2;host=localhost';
$user = 'inscritjeux2';
$password = '78XaMmlUIeSFUtiI';

try {
    $bdd2 = new PDO($dsn, $user, $password);
  //echo'connexion ok!';
} catch (PDOException $e) {
   echo'ERREUR: '.$e->getMessage();
}

?>