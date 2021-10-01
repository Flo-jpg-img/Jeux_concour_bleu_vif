<?php
$dsn = 'mysql:dbname=bleuvif2;host=localhost';
$user = 'bleuvif2';
$password = '1eidGDRGiMcxMuBH';

try {
    $bdd = new PDO($dsn, $user, $password);
   //echo'connexion ok!';
} catch (PDOException $e) {
   echo'ERREUR: '.$e->getMessage();
}

?>