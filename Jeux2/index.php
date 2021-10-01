<?php

include 'admin/bdd.php';


$sql = "SELECT * FROM home";
$requete = $bdd->prepare($sql);
$requete->execute();
$home = $requete->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM images";
$requete = $bdd->prepare($sql);
$requete->execute();
$images = $requete->fetch(PDO::FETCH_ASSOC);
 
;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Grand jeux concour</title>
</head>
<body>
    <img class="bgindex" src="img/<?=$images['img_url'] ?>">
    <div>
        <br>
        <div class=" ali ">
            <h1 class="text-center titre"><?=$home['titre']?></h1>
            <h2 class="text-center text-uppercase fs-4 p-5 titre"><?=$home['date']?></h2>
            <p class="text-center"><?=$home['phrase']?></p>
            <div class="zoom text-center ">
                <a href="inscription.php" type="button" class="btn text-uppercase <?php echo($home['bouton']);?>    btn-g titre  z btn-lg "><?=$home['text_btn']?></a>
            </div>
            <div class="d-flex  justify-content-between pt-5" id="footer-index">
            <div class="p-1 d-flex">
                    <p class="text-uppercase">Réalisation:</p> <a class="px-2" href="https://bleuvif.com/"> Notre site</a> 
            </div>
            <div  class="p-1 d-flex">
                    <p class="text-uppercase">Dotations:</p> <a class="px-2" href="https://bleuvif.com/"> Page de gains</a> 
            </div>
            <div  class="p-1 d-flex">
                    <p class="text-uppercase">Reglement:</p>  <a  class="px-2" href="https://bleuvif.com/"> Voir le reglement</a>
            </div>

        </div>
        <br>
        
    </div>
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
</body>
</html>
