<?php
 session_start();
include 'admin/bdd.php';




$sql = "SELECT * FROM imagesinscription";
$requete = $bdd->prepare($sql);
$requete->execute();
$imagesinscription = $requete->fetch(PDO::FETCH_ASSOC);
//var_dump($imagesinscription);

$sql = "SELECT * FROM inscription";
$requete = $bdd->prepare($sql);
$requete->execute();
$inscription = $requete->fetch(PDO::FETCH_ASSOC);
 

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
    
    <title>Inscription</title>
</head>
<body>
    <img class="bgindex" src="img/<?=$imagesinscription['img_url'] ?>">
    <div class="text-center alig" id="respon">
        <h1 class=" fs-1 titre text-center "> <?=$inscription['titre']?></h1>
        <h2 class="text-center text-uppercase fs-4  titre"><?=$inscription['date']?></h2>
        <div class=" text-center">
            <form class="Text-center" action="admin/Participants/action.php" id="demo-form"  method="POST" >
                <div class="d-flex justify-content-between  ">
                    <div class="mb-3">
                        <label for="Nom" class="form-label   cno">Nom</label>
                        <input type="text" class="form-control  " id="nom" name="nom" aria-describedby="nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label    cno">Prenom</label>
                        <input type="prenom" class="form-control " id="prenom" name="prenom" aria-describedby="prenom" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label  f  cno">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" required>
                </div>
  
                <?php
               //var_dump($_SESSION['alertmail']);
            //var_dump($_SESSION);
                
                
                if (isset($_SESSION['alertmail']) && $_SESSION['alertmail']==1) {
                    echo'<div class="alert alert-danger alert-dismissible" role="alert">
                   Désolé mais cette adresse mail est deja utilisée!
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 unset($_SESSION['alertmail']);
                 $_SESSION['alertmail']=0;
                }
                if (isset($_SESSION['captcha']) && $_SESSION['captcha']==1) {
                    echo'<div class="alert alert-danger alert-dismissible" role="alert">
                   Désolé mais le captcha n\'est pas valide!
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 unset($_SESSION['captcha']);
                 $_SESSION['alertmail']=0;
                }
                if (isset($_SESSION['alertmailvide']) && $_SESSION['alertmailvide']==1) {
                    echo'<div class="alert alert-danger alert-dismissible" role="alert">
                   Veuillez remplir au minimum votre adresse mail!
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 unset($_SESSION['alertmailvide']);
                 $_SESSION['alertmailvide']=0;
                }
      
      
                 ?>
                <div class="d-flex justify-content-between">
                    <div>
                    <label for="civilite" class="form-label    cno">Civilité</label>
                        <select class="form-select " name="civilite" aria-label="Default select example">                   
                            <option selected value="Mr">Mr</option>
                            <option   value="M">M</option>
                        </select>
                    </div>
                    <div class="mb-3 ">
                        <label for="numero" class="form-label" id="cn">Numéro de téléphone</label>
                        <input type="number" class="form-control " id="numero" name="numero" aria-describedby="numero" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="adrese" class="form-label    ">Adresse</label>
                    <input type="text" class="form-control" name="adresse" id="adresse" >
                </div>  
                <div class="d-flex justify-content-between ">
                    <div class="form-check mx-2">
                        <input class="form-check-input" type="checkbox" name="reglement" value="" id="reglement">
                        <label class="form-check-label mx-2 cno" for="reglement">
                        Accepter le règlement
                        </label>
                    </div>
                    <div class="form-check px-3">
                        <input class="form-check-input" type="checkbox" name="politique" value="" id="politique">
                        <label class="form-check-label  cno" for="politique">
                       Politique de confidentialité
                        </label>
                    </div>  
                    <div class="form-check coup">
                        <input class="form-check-input" type="checkbox" name="newsletter" value="" id="newsletter">
                        <label class="form-check-label  cno" for="newsletter">
                        newsletter
                        </label>
                    </div>
                </div> 
                <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>" />
                <label class="p-3" for="justificatif">Veuillez sélèctionner votre justificatif d'achat:</label><br>
                    <input type="file" id="justificatif" name="justificatif" accept="image/pdf, image/jpeg">
                    
                <div class="text-center pt-3 ">
                
                <button data-sitekey="6LezUQwcAAAAAHoAJxY5ePqjpT0FXWO_7Ygp6lhp"  type="submit" data-name="btn-ajout" class="btn g-recaptcha btn-g <?php echo($inscription['bouton']);?>   z btn-lg text-uppercase"    data-callback='onSubmit'     ><?= $inscription['boutontext']?></button>
                </div>
            </form>
         
        </div>
        <div class="d-flex footer justify-content-center pt-5" id="footer-jeux" >
            <div class=" d-flex">
                    <p class="text-uppercase">Réalisation:</p> <a class="px-2" href="https://bleuvif.com/" target="blank"> Notre site</a> 
            </div>
            <div  class=" d-flex">
                    <p class="text-uppercase">Dotations:</p> <a class="px-2" href="https://bleuvif.com/" target="pagedegains.php"> Page de gains</a> 
            </div>
            <div  class=" d-flex">
                    <p class="text-uppercase">Reglement:</p>  <a  class="px-2" href="Reglement.pdf" download="Reglement.pdf" > Voir le reglement</a>
            </div>

        </div>
    </div>
    <script>
        function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
    </script>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
</body>
</html>