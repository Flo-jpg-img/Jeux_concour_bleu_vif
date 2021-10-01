<?php
include '../../connexion/config.php';
if (!isConnect()) {
  header('Location:../../connexion/index.php');
  die;
}
include 'Participants/bddparticipants.php';

$sql = "SELECT * FROM participants WHERE gagnant=0 ORDER BY RAND()
LIMIT 1";

$requete = $bdd2->prepare($sql);
$requete->execute();
$participants = $requete->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Gagnant</title>
</head>
<body>
    <h1> Le/La grand gagnant(e) du jeux concour est: </h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">adresse mail</th>
      <th scope="col">Adresse postale</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?=$participants['nom'] ?></th>
     
      <td><?=$participants['prenom'] ?></td>
      <td><?=$participants['mail'] ?></td>
      <td><?=$participants['adresse'] ?></td>
    </tr>
</body>
</html>