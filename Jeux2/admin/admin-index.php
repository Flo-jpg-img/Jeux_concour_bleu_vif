<?php

include 'Participants/bddparticipants.php';
include 'bdd.php';
include '../../connexion/config.php';

if (!isConnect()) {
    header('Location:../../connexion/index.php');
    die;
  }
  //var_dump(url_encode($url));
   
    
  //var_dump(urldecode($url));
  //die;
$sql = "SELECT * FROM home";
$requete = $bdd->prepare($sql);
$requete->execute();
$home = $requete->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM images";
$requete = $bdd->prepare($sql);
$requete->execute();

$images = $requete->fetch(PDO::FETCH_ASSOC);
$sql = "SELECT * FROM imagejeux";
$requete = $bdd->prepare($sql);
$requete->execute();
$imagejeux = $requete->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM inscription";
$requete = $bdd->prepare($sql);
$requete->execute();
$inscription = $requete->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM imagesinscription";
$requete = $bdd->prepare($sql);
$requete->execute();
$imagesinscription = $requete->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM jeux";
$requete = $bdd->prepare($sql);
$requete->execute();
$jeux = $requete->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM pageremerciments";
$requete = $bdd->prepare($sql);
$requete->execute();
$pageremerciments = $requete->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM imagecentrale";
$requete = $bdd->prepare($sql);
$requete->execute();
$imagecentrale = $requete->fetch(PDO::FETCH_ASSOC);

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
    
    <title> Admin index</title>
</head>
<body>
    <h1 class="p-5 fs-1  text-center">Modif des pages du jeux concour</h1>
    <?php

;
    
    if (isset($_SESSION['suppr']) && $_SESSION['suppr']=1) {
                   echo'<div class="alert alert-danger  role="alert">
                   Tout les participants ont bien étaient supprimés! 
                 </div>';
                unset($_SESSION['suppr']);
               }
   ?>
    <form action="../../connexion/deco.php" method="POST">
        <button type="submit"  class="btn btn-primary" name="btn-deco">Se déconnecter</button>
    </form>
    <a href="../index.php" target="_blank" type="submit"  class="btn btn-success my-1" >Voir le jeux</a>
    <td><a  href="../../Jeux_index/index_jeux.php" class="btn btn-success" target="blank" class="btn btn-success">Retour au menu</a></td>  
    <h2 class="p-3 fs-1  text-center">modif de l'index</h2>
    <div class="text-center">
    <a href="tirageausort.php" type="submit"  class="btn btn-primary fs-1 " name="tirage">Tirer au sort<a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Image de fond</th>
                <th scope="col">Titre</th>
                <th scope="col">Date</th>
                <th scope="col">Phrase</th>
                <th scope="col">Bouton</th>
                <th scope="col">Modifier</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?=$home['id']?></td>
                <td> <img class="imginde" src="../img/<?=$images['img_url'] ?>" ></td>
                <td><?=$home['titre']?></td>
                <td><?=$home['date']?></td>
                <td><?=$home['phrase']?></td>
                <td><button  type="button" class="btn <?php echo ($home['bouton']) ;?> btn-g titre  z btn-lg "><?=$home['text_btn']?></button></td>
                <td>
                    <a href="modif.php" type="button" class="btn btn-warning">modifier</a>
                </td>
               
              
            </tr>
    </table>
    <h2 class="pt-5 fs-1  text-center">modif de la page d'inscription</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Image de fond</th>
                <th scope="col">Titre</th>
                <th scope="col">Date</th>
                <th scope="col">Bouton</th>
                <th scope="col">Modifier</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?=$inscription['id']?></td>
                <td> <img class="imginde" src="../img/<?=$imagesinscription['img_url'] ?>"></td>
                <td><?=$inscription['titre']?></td>
                <td><?=$inscription['date']?></td>
                <td><button  type="button" class="btn <?php echo($inscription['bouton']);?> btn-g titre  z btn-lg "><?=$inscription['boutontext']?></button></td>
                <td>
                    <a href="modif-inscription.php" type="button" class="btn btn-warning">modifier</a>
                </td>
              
            </tr>
    </table>
    <h2 class="pt-5 fs-1  text-center">modif de la page de jeux</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Image de fond</th>
                <th scope="col">Titre</th>
                <th scope="col">Bouton</th>
                <th scope="col">Modifier</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?=$inscription['id']?></td>
                <td> <img class="imginde" src="../img/<?=$imagejeux['img_url'] ?>"></td>
                <td><?=$jeux['titre']?></td>
               
               
                <td><button  type="button" class="btn <?php echo($jeux['bouton']);?> btn-g titre  z btn-lg "><?=$jeux['textbouton']?></button></td>
                <td>
                    <a href="modif-jeux.php" type="button" class="btn btn-warning">modifier</a>
                </td>
              
            </tr>
    </table>

    <h2 class="pt-5 fs-1  text-center">modif de la page de remerciments</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Image de fond</th>
                <th scope="col">Image centrale</th>
                <th scope="col">Titre</th>
                <th scope="col">phrase</th>
                <th scope="col">Bouton</th>
                <th scope="col">Bouton copier coller</th>
                <th scope="col">Bouton envoyer</th>
                <th scope="col">Phrase de fin</th>
                <th scope="col">Modifier</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?=$pageremerciments['id']?></td>
                <td> <img class="imginde" src="../img/<?=$pageremerciments['imagefond'] ?>"></td>
                <td> <img class="imginde" src="../img/<?=$imagecentrale['img_url'] ?>"></td>
                <td><?=$pageremerciments['titre']?></td>
                <td><?=$pageremerciments['phrase']?></td>
                <td><button  type="button" class="btn <?php echo($pageremerciments['couleurbouton']);?> btn-g titre  z btn-lg "><?=$pageremerciments['textbouton']?></button></td>
                <td><button  type="button" class="btn <?php echo($pageremerciments['couleurbtncc']);?> btn-g titre  z btn-lg "><?=$pageremerciments['textboutoncc']?></button></td>
                <td><button  type="button" class="btn <?php echo($pageremerciments['bouleurbtnenvoyer']);?> btn-g titre  z btn-lg "><?=$pageremerciments['textbtnenvoyer']?></button></td>
                <td><?=$pageremerciments['phrasedefin']?></td>
                <td>
                    <a href="modifremerciments.php" type="button" class="btn btn-warning">modifier</a>
                </td>
              
            </tr>
    </table>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Reponse 1</th>
                <th scope="col">Reponse 2</th>
                <th scope="col">Reponse 3</th>
                <th scope="col">Reponse 4</th>
                <th scope="col">Reponse 5</th>
                <th scope="col">Modifier</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?=$reponsegagnante['question1']?></td>
                <td><?=$reponsegagnante['question2']?></td>
                <td><?=$reponsegagnante['question3']?></td>
                <td><?=$reponsegagnante['question4']?></td>
                <td><?=$reponsegagnante['question5']?></td>
                <td>
                    <a href="Pagemodifreponse.php" type="button" name="modifreponse" value="1" class="btn btn-warning">modifier</a>
                </td>
              
            </tr>
    </table>
    <a href="delete.php" type="button" class="btn btn-danger m-3">Supprimer tout les participants de la base de donnés</a>
    
</body>
</html>