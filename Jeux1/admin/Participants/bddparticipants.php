<?php
$dsn = 'mysql:dbname=inscritjeux;host=localhost';
$user = 'inscritjeux';
$password = 'SO9gxsfmcCPYB0cf';

try {
    $bdd2 = new PDO($dsn, $user, $password);
  echo'connexion ok!';
} catch (PDOException $e) {
   echo'ERREUR: '.$e->getMessage();
}

?>