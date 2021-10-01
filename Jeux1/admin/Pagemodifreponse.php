<?php
include '../../connexion/config.php';
if (!isConnect()) {
  header('Location:../../connexion/index.php');
  die;
}

include 'Participants/bddparticipants.php';
$sql = "SELECT * FROM reponsegagnante";
$requete = $bdd2->prepare($sql);
$requete->execute();
$reponsegagnante = $requete->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Page de modification des réponses</title>
</head>
<body>
<h1 class=text-center>Formulaire Modif des réponses au questionnaire</h1>
<form action="actionreponses.php" class="container" method="POST">
  <div class="mb-3 ">
    <label for="Première réponse:" class="form-label">Première réponse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="reponse1" value="<?=$reponsegagnante['question1']?>" >

    <label for="Première réponse:" class="form-label" >Deuxième réponse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="reponse2" value="<?=$reponsegagnante['question2']?>">

    <label for="Première réponse:" class="form-label">Troisième réponse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="reponse3" value="<?=$reponsegagnante['question3']?>" >

    <label for="Première réponse:" class="form-label">Quatrieme réponse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="reponse4" value="<?=$reponsegagnante['question4']?>" >

    <label for="Première réponse:" class="form-label">Cinquième réponse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="reponse5" value="<?=$reponsegagnante['question5']?>" >

  <div class="pt-3">
    <button type="submit" name="btn-modif-reponses" class="btn btn-primary">Valider</button>
  </div>
  </div>
</form>
</body>
</html>