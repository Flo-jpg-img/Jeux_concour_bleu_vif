<?php

include 'bdd.php';
include '../../connexion/config.php';

if (!isConnect()) {
  header('Location:../../connexion/index.php');
  die;
}
$sql = "SELECT * FROM inscription";
$requete = $bdd->prepare($sql);
$requete->execute();
$inscription = $requete->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Formulaire modif</title>
</head>
<body>
<h1 class=text-center>Formulaire Modif de la pasge d'inscription</h1>
<form action="action-inscription.php" class="container" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="bg" class="form-label">Image de fond</label><br>
    <input type="file"  accept=".png, .jpg, .jpeg" id="bg" name="image">
  </div>
  <div class="mb-3">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre"value="<?=$inscription['titre']?>" >
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="text" class="form-control" id="date" name="date" value="<?=$inscription['date']?>" >
  </div>
  <div class="mb-3">
    <label for="btninscription" class="form-label">Bouton</label>
    <select name="btninscription" id="button">
    <option value="<?=$inscription['bouton']?>">Couleur actuelle</option>
      <option value="btn-primary">Bleu</option>
      <option value="btn-danger">Rouge</option>
      <option value="btn-warning">Jaune</option>
      <option value="btn-success">Vert</option>
      <option value="btn-secondary">Gris</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="boutontext" class="form-label">Texte du bouton</label>
    <input type="text" class="form-control" id="boutontext" name="boutontext" value="<?=$inscription['boutontext']?>" >
  </div>
  <button type="submit" name="btn-modif-inscription-action" class="btn btn-primary">Valider</button>
</form>

</body>

</html>