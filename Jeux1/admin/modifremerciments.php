<?php

include 'bdd.php';
include '../../connexion/config.php';
if (!isConnect()) {
  header('Location:../../connexion/index.php');
  die;
}

$sql = "SELECT * FROM pageremerciments";
$requete = $bdd->prepare($sql);
$requete->execute();
$pageremerciments = $requete->fetch(PDO::FETCH_ASSOC);

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
<h1 class=text-center>Formulaire Modif de la page de remerciments</h1>
<form action="actionremerciments.php" class="container" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="bg" class="form-label">Image de fond</label><br>
    <input type="file"  accept=".png, .jpg, .jpeg" id="bg" name="image">
  </div>
  <div class="mb-3">
    <label for="bg" class="form-label">Image centrale</label><br>
    <input type="file"  accept=".png, .jpg, .jpeg" id="bg" name="imagecentrale">
  </div>
  <div class="mb-3">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre"value="<?=$pageremerciments['titre']?>" >
  </div>
  <div class="mb-3">
    <label for="phrase" class="form-label">Phrase</label>
    <input type="text" class="form-control" id="phrase" name="phrase"value="<?=$pageremerciments['phrase']?>" >
  </div>
  
  <div class="mb-3">
    <label for="boutontext" class="form-label">Texte du bouton partager</label>
    <input type="text" class="form-control" id="boutontext" name="boutontext" value="<?=$pageremerciments['textbouton']?>" >
  </div>
  <div class="mb-3">
    <label for="btnremerciments" class="form-label">couleur Bouton partager</label>
    <select name="btnremerciments" id="button">
    <option value="<?=$pageremerciments['couleurbouton']?>">Couleur actuelle</option>
      <option value="btn-primary">Bleu</option>
      <option value="btn-danger">Rouge</option>
      <option value="btn-warning">Jaune</option>
      <option value="btn-success">Vert</option>
      <option value="btn-secondary">Gris</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="btnremercimentscc" class="form-label">Texte du bouton copier coller</label>
    <input type="text" class="form-control" id="textboutoncc" name="textboutoncc" value="<?=$pageremerciments['textboutoncc']?>" >
  </div>
  <div class="mb-3">
    <label for="btnremercimentsc" class="form-label"> couleur Bouton copier coller</label>
    <select name="btnremercimentscc" id="button">
    <option value="<?=$pageremerciments['couleurbtncc']?>">Couleur actuelle</option>
      <option value="btn-primary">Bleu</option>
      <option value="btn-danger">Rouge</option>
      <option value="btn-warning">Jaune</option>
      <option value="btn-success">Vert</option>
      <option value="btn-secondary">Gris</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="textbtnenvoyer" class="form-label">Texte du bouton envoyer</label>
    <input type="text" class="form-control" id="textbtnenvoyer" name="textbtnenvoyer" value="<?=$pageremerciments['textbtnenvoyer']?>" >
  </div>
  <div class="mb-3">
    <label for="bouleurbtnenvoyer" class="form-label"> couleur Bouton envoyer</label>
    <select name="bouleurbtnenvoyer" id="button">
    <option value="<?=$pageremerciments['bouleurbtnenvoyer']?>">Couleur actuelle</option>
      <option value="btn-primary">Bleu</option>
      <option value="btn-danger">Rouge</option>
      <option value="btn-warning">Jaune</option>
      <option value="btn-success">Vert</option>
      <option value="btn-secondary">Gris</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="phrasedefin" class="form-label">Phrase de fin</label>
    <input type="text" class="form-control" id="phrasedefin" name="phrasedefin"value="<?=$pageremerciments['phrasedefin']?>" >
  </div>
  <button type="submit" name="btn-modif-remerciments-action" class="btn btn-primary">Valider</button>
</form>

</body>

</html>