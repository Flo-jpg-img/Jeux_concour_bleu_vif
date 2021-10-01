<?php

include 'config.php';
include '../Jeux1/admin/Participants/bddparticipants.php';
// var_dump(password_hash("bleuvifff64", PASSWORD_DEFAULT));
// die;
 if (isConnect()) {
  //var_dump(!isConnect());
  //die;
  header('location: Jeux_concour_bleu_vif/Jeux1/admin/connexion/index.php');
  die;
  
}
//var_dump($_SESSION);
  
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center" >Connexion</h1>
    </div>
    <form action="action.php" method="POST"class="container text-center">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">adresse mail</label>
    <input type="mail" class="form-control text-center" name="mail" value="" >
  </div>
  <div class="mb-3">
    <label for="titre" class="form-label">Mot de passe:</label>
    <input type="password" class="form-control text-center" name="mdp" value="" >
  </div>
 
  <button type="submit" name="btn-login" class="btn btn-success btn-lg">Connexion</button>
</form>
    
</body>
</html>
