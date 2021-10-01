<?php

include 'bdd.php';
include '../../connexion/config.php';

if (!isConnect()) {
  header('Location:../../connexion/index.php');
  die;
}
$sql = "SELECT * FROM jeux";
$requete = $bdd->prepare($sql);
$requete->execute();
$jeux = $requete->fetch(PDO::FETCH_ASSOC);

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
<h1 class=text-center>Formulaire Modif de la page de jeux</h1>
<form action="action_jeux.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3 container ">
    <label for="bg" class="form-label">Image de fond</label><br>
    <input  type="file"  accept=".png, .jpg, .jpeg" id="bg" name="image">
  </div>
  <div class="mb-3 container">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre"value="<?=$jeux['titre']?>" >
  </div>
  <div class="mb-3 container">
    <label for="question1" class="form-label text-uppercase">Question 1</label>
    <input type="text" class="form-control " id="question1" name="question1" value="<?=$jeux['question1']?>" >
    <label for="reponse1" class="form-label">Réponse 1</label>
    <input type="text" class="form-control" id="reponse1" name="reponse1" value="<?=$jeux['reponse1']?>" >
    <label for="reponse2" class="form-label">Réponse 2</label>
    <input type="text" class="form-control" id="reponse2" name="reponse2" value="<?=$jeux['reponse2']?>" >
    <label for="reponse3" class="form-label">Réponse 3</label>
    <input type="text" class="form-control" id="reponse3" name="reponse3" value="<?=$jeux['reponse3']?>" >
    <label for="reponse4" class="form-label">Réponse 4</label>
    <input type="text" class="form-control" id="reponse4" name="reponse4" value="<?=$jeux['reponse4']?>" >
    <br>
    <br>
    <br>
    <br>
    
    <label for="question2" class="form-label text-uppercase">Question 2</label>
    <input type="text" class="form-control " id="question2" name="question2" value="<?=$jeux['question2']?>" >
    <label for="reponse5" class="form-label">Réponse 1</label>
    <input type="text" class="form-control" id="reponse5" name="reponse5" value="<?=$jeux['reponse5']?>" >
    <label for="reponse6" class="form-label">Réponse 2</label>
    <input type="text" class="form-control" id="reponse6" name="reponse6" value="<?=$jeux['reponse6']?>" >
    <label for="reponse7" class="form-label">Réponse 3</label>
    <input type="text" class="form-control" id="reponse7" name="reponse7" value="<?=$jeux['reponse7']?>" >
    <label for="reponse8" class="form-label">Réponse 4</label>
    <input type="text" class="form-control" id="reponse8" name="reponse8" value="<?=$jeux['reponse8']?>" >
    <br>
    <br>
    <br>
    <br>
    <label for="question3" class="form-label text-uppercase">Question 3</label>
    <input type="text" class="form-control " id="question3" name="question3" value="<?=$jeux['question3']?>" >
    <label for="reponse9" class="form-label">Réponse 1</label>
    <input type="text" class="form-control" id="reponse9" name="reponse9" value="<?=$jeux['reponse9']?>" >
    <label for="reponse10" class="form-label">Réponse 2</label>
    <input type="text" class="form-control" id="reponse10" name="reponse10" value="<?=$jeux['reponse10']?>" >
    <label for="reponse11" class="form-label">Réponse 3</label>
    <input type="text" class="form-control" id="reponse11" name="reponse11" value="<?=$jeux['reponse11']?>" >
    <label for="reponse12" class="form-label">Réponse 4</label>
    <input type="text" class="form-control" id="reponse12" name="reponse12" value="<?=$jeux['reponse12']?>" >
    <br>
    <br>
    <br>
    <br>
    <label for="question4" class="form-label text-uppercase">Question 4</label>
    <input type="text" class="form-control " id="question4" name="question4" value="<?=$jeux['question4']?>" >
    <label for="reponse13" class="form-label">Réponse 1</label>
    <input type="text" class="form-control" id="reponse13" name="reponse13" value="<?=$jeux['reponse13']?>" >
    <label for="reponse14" class="form-label">Réponse 2</label>
    <input type="text" class="form-control" id="reponse14" name="reponse14" value="<?=$jeux['reponse14']?>" >
    <label for="reponse15" class="form-label">Réponse 3</label>
    <input type="text" class="form-control" id="reponse15" name="reponse15" value="<?=$jeux['reponse15']?>" >
    <label for="reponse15" class="form-label">Réponse 4</label>
    <input type="text" class="form-control" id="reponse16" name="reponse16" value="<?=$jeux['reponse16']?>" >
    <br>
    <br>
    <br>
    <br>
    <label for="reponse16" class="form-label text-uppercase">Question 5</label>
    <input type="text" class="form-control " id="question5" name="question5" value="<?=$jeux['question5']?>" >
    <label for="reponse17" class="form-label">Réponse 1</label>
    <input type="text" class="form-control" id="reponse17" name="reponse17" value="<?=$jeux['reponse17']?>" >
    <label for="reponse18" class="form-label">Réponse 2</label>
    <input type="text" class="form-control" id="reponse18" name="reponse18" value="<?=$jeux['reponse18']?>" >
    <label for="reponse19" class="form-label">Réponse 3</label>
    <input type="text" class="form-control" id="reponse19" name="reponse19" value="<?=$jeux['reponse19']?>" >
    <label for="reponse20" class="form-label">Réponse 4</label>
    <input type="text" class="form-control" id="reponse20" name="reponse20" value="<?=$jeux['reponse20']?>" >
  </div>
  <div class="mb-3 container">
    <label for="boutontext" class="form-label">Texte du bouton</label>
    <input type="text" class="form-control" id="boutontext" name="boutontext" value="<?=$jeux['textbouton']?>" >
  </div>
  <div class="mb-3 container">
    <label for="btnjeu" class="form-label">Couleur du Bouton</label><br>
    <select name="btnjeux" id="button">
    <option value="<?=$jeux['bouton']?>">Couleur actuelle</option>
      <option value="btn-primary">Bleu</option>
      <option value="btn-danger">Rouge</option>
      <option value="btn-warning">Jaune</option>
      <option value="btn-success">Vert</option>
      <option value="btn-secondary">Gris</option>
    </select>
  </div>
  <div class="text-center pb-3">
  <button type="submit" name="btn-modif-jeux-action" class="btn btn-primary">Valider</button>
  </div>
</form>

</body>

</html>