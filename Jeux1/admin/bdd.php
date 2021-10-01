<?php
$dsn = 'mysql:dbname=bleuvif;host=localhost';
$user = 'bleuvif';
$password = '1X3HJPcuaGd74Yee';

try {
    $bdd = new PDO($dsn, $user, $password);
   //echo'connexion ok!';
} catch (PDOException $e) {
   echo'ERREUR: '.$e->getMessage();
}

?>