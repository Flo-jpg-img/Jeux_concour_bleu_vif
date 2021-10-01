<?php 
session_start();
include 'admin/Participants/bddparticipants.php';
include 'admin/bdd.php';


//var_dump($_SESSION);

$sql = "SELECT * FROM jeux";
$requete = $bdd->prepare($sql);
$requete->execute();
$jeux = $requete->fetch(PDO::FETCH_ASSOC);
//var_dump($imagesinscription);

$sql = "SELECT * FROM imagejeux";
$requete = $bdd->prepare($sql);
$requete->execute();
$imagejeux = $requete->fetch(PDO::FETCH_ASSOC);



$sql = "SELECT * FROM participants WHERE mail='".$_SESSION['mail']."'";
//var_dump($sql);
$requete = $bdd2->prepare($sql);
$requete->execute();
$participants = $requete->fetch(PDO::FETCH_ASSOC)
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Page de jeux </title>
</head>
<body>
    <img class="bgindex" src="img/<?=$imagejeux['img_url'] ?>">
    
    <div id="carouselExampleControlsNoTouching" class="carousel slide " data-bs-touch="false" data-bs-interval="false">
    <h1 class="text-center margi titre "> <?=$jeux['titre'];?> </h1>
      <form  method="POST" action="admin/Participants/action.php" >
        <div class="carousel-inner container  back " id=>
        <div class="carousel-item active tailles">
            <h2 class=" pt-3 text-center titre res "><?=$jeux['question1']?></h2>
            <div class="mb-3 form-check text-center ">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse1']?>" name="reponse1" id="exampleCheck5">
              <label class="form-check-label titre res" for="exampleCheck1"><?=$jeux['reponse1']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse2']?>" name="reponse1" id="exampleCheck6">
              <label class="form-check-label titre res" for="exampleCheck2"><?=$jeux['reponse2']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse3']?>" name="reponse1" id="exampleCheck7">
              <label class="form-check-label titre res" for="exampleCheck3"><?=$jeux['reponse3']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse4']?>" name="reponse1" id="exampleCheck8">
              <label class="form-check-label titre res" for="exampleCheck4"><?=$jeux['reponse4']?></label>
          </div>
        </div>
        <div class="carousel-item tailles">
          <h2 class="pt-3 text-center titre res"><?=$jeux['question2']?></h2>
          <div class="mb-3 form-check text-center ">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse5']?>" name="reponse2" id="exampleCheck5">
              <label class="form-check-label titre res" for="exampleCheck5"><?=$jeux['reponse5']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse6']?>" name="reponse2" id="exampleCheck6">
              <label class="form-check-label titre res" for="exampleCheck6"><?=$jeux['reponse6']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse7']?>" name="reponse2" id="exampleCheck7">
              <label class="form-check-label titre res" for="exampleCheck7"><?=$jeux['reponse7']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse8']?>" name="reponse2" id="exampleCheck8">
              <label class="form-check-label titre res" for="exampleCheck8"><?=$jeux['reponse8']?></label>
          </div>
        </div>
        <div class="carousel-item tailles">
          <h2 class="pt-3 text-center titre res coup"><?=$jeux['question3']?></h2>
          <div class="mb-3 form-check text-center ">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse9']?>" name="reponse3" id="exampleCheck9">
              <label class="form-check-label titre res" for="exampleCheck9"><?=$jeux['reponse9']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse10']?>" name="reponse3" id="exampleCheck10">
              <label class="form-check-label titre res" for="exampleCheck10"><?=$jeux['reponse10']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse11']?>" name="reponse3" id="exampleCheck11">
              <label class="form-check-label titre res" for="exampleCheck11"><?=$jeux['reponse11']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse12']?>" name="reponse3" id="exampleCheck12">
              <label class="form-check-label titre res" for="exampleCheck12"><?=$jeux['reponse12']?></label>
          </div>
        </div>
        <div class="carousel-item tailles">
          <h2 class="pt-3 text-center titre res"><?=$jeux['question4']?></h2>
          <div class="mb-3 form-check text-center ">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse13']?>" name="reponse4" id="exampleCheck13">
              <label class="form-check-label titre res" for="exampleCheck13"><?=$jeux['reponse13']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse14']?>" name="reponse4" id="exampleCheck14">
              <label class="form-check-label titre res" for="exampleCheck14"><?=$jeux['reponse14']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse15']?>" name="reponse4" id="exampleCheck15">
              <label class="form-check-label titre res" for="exampleCheck15"> <?=$jeux['reponse15']?></label>
          </div>
          <div class="mb-3 form-check text-center pb-5">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse16']?>" name="reponse4" id="exampleCheck16">
              <label class="form-check-label titre res" for="exampleCheck16"><?=$jeux['reponse16']?></label>
          </div>
        </div>
        <div class="carousel-item tailles">
          <h2 class="pt-3 text-center titre res"><?=$jeux['question5']?></h2>
          <div class="mb-3 form-check text-center ">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse17']?>" name="reponse5" id="exampleCheck17">
              <label class="form-check-label titre res" for="exampleCheck17"><?=$jeux['reponse17']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse18']?>" name="reponse5" id="exampleCheck18">
              <label class="form-check-label titre res" for="exampleCheck18"><?=$jeux['reponse18']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse19']?>" name="reponse5" id="exampleCheck19">
              <label class="form-check-label titre res" for="exampleCheck19"><?=$jeux['reponse19']?></label>
          </div>
          <div class="mb-3 form-check text-center">
              <input type="radio" class="form-check-input" value="<?=$jeux['reponse20']?>" name="reponse5" id="exampleCheck20">
              <label class="form-check-label titre res" for="exampleCheck20"><?=$jeux['reponse20']?></label>
          </div>
        </div>
      </div>
      <input type="text" hidden value="<?=$participants['id']?> " name="idjoueur">
     <div class="text-center pt-4 pl-2" id="btnverif">
         <button type="submit" name="btn-actionverif" class="btn btn-success rounded-pill titre p-3 " >Valider mes reponses</button>
        </div>
        
      
      <button class="carousel-control-next text-dark  btn-carou  " value="" id="compteur" onclick="compter()" type="submit" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="suivant p-3 rounded-pill <?php echo ($jeux['bouton']);?> titre res" id="ddn" ><?=$jeux['textbouton']?></span>
      </button>
      
    </form>
    <div class="d-flex footer justify-content-center pt-5" id="footer-jeux-1080" >
            <div class=" d-flex">
                    <p class="text-uppercase">Réalisation:</p> <a class="px-2" href="https://bleuvif.com/"> Notre site</a> 
            </div>
            <div  class=" d-flex">
                    <p class="text-uppercase">Dotations:</p> <a class="px-2" href="https://bleuvif.com/"> Page de gains</a> 
            </div>
            <div  class=" d-flex">
                    <p class="text-uppercase">Reglement:</p>  <a  class="px-2" href="https://bleuvif.com/"> Voir le reglement</a>
            </div>

        </div>
    </div>
     
      <script src="jquery.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
      <script src="js.js"></script>
</body>
</html>

