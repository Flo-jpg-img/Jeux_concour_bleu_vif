<?php
session_start();
include 'bddparticipants.php';

$sql = "SELECT * FROM participants";
$requete = $bdd2->prepare($sql);
$requete->execute();
$participants = $requete->fetchALL(PDO::FETCH_ASSOC);
//var_dump($participants);




?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Participants</title>
  </head>
  <body>
    <h1 class="text-center pb-5">Tableau de tout les participants</h1>
    <table class="table container ">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Mail</th>
            <th scope="col">Civilité</th>
            <th scope="col">Numéro de téléphone</th>
            <th scope="col">Adresse</th>    
        </tr>
        </thead>
        <?php foreach ($participants as $parti): ?>
                <tr>
                    <th scope="row"><?php echo $parti['id'] ?></th>
                    <td><?php echo $parti['nom'] ?></td>
                    <td><?php echo $parti['prenom'] ?></td>
                    <td><?php echo $parti['mail'] ?></td>
                    <td><?php echo $parti['civilite']  ?></td>
                    <td><?php echo $parti['telephone']  ?></td>
                    <td><?php echo $parti['adresse']  ?></td>
                  
                    
                </tr>
            <?php endforeach; ?>
</table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>