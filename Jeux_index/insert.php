<?php
session_start();
include 'bddjeux.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Choix du jeux</title>
</head>
<body>
    <h1 class="text-center">Veuillez choisir le jeux que vous voulez</h1>
    <div class="text-center">
    <p href="action.php?btn-modi=btn-modi">Veuillez nommer le nouveau jeu</p>
    </div>
    <div class="mb-3 container">
        <form action="action.php" method="POST">
            <label for="nom" class="form-label">Nom du jeu:</label>
            <input type="text" class="form-control" id="nom" name="nom" >
            <button type="submit" name="btn-modi"  class="btn btn-success">Ajouter</button>
        </form>
  </div>
</body>
</html>