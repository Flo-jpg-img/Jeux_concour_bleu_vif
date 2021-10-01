<?php session_start();

include 'admin/bdd.php';

$sql = "SELECT * FROM pageremerciments";
$requete = $bdd->prepare($sql);
$requete->execute();
$pageremerciments = $requete->fetch(PDO::FETCH_ASSOC);
//var_dump($imagesinscription);

$sql = "SELECT * FROM imagecentrale";
$requete = $bdd->prepare($sql);
$requete->execute();
$imagecentrale = $requete->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Remerciments</title>
</head>
<body>
    <div class="d-flex text-center  justify-content-center">
        <div>
        <img class="bgindex" src="img/<?=$pageremerciments['imagefond'] ?>">   
        </div>
    </div>
    <div class="ali text-center">
        
        <img  id="tail" class="text-center" src="img/<?=$imagecentrale['img_url'] ?>">
        <h1 class="text-center pt-3 mg" id="h1"><?=$pageremerciments['titre'];?></h1>
        <h2 id="h2" class="text-center"><?=$pageremerciments['phrase'];?></h2>
        <div class="d-flex text-center  justify-content-center pt-2">
   
            <a href="https://www.facebook.com/campaign/landing.php?campaign_id=1555709729&extra_1=s%7Cc%7C512934324601%7Ce%7Cfacebook%7C&placement=&creative=512934324601&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1555709729%26adgroupid%3D58543435105%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D9055907%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjwu7OIBhCsARIsALxCUaOsTvJwd6MkSmEtOmvHJgrttn_1NQ2QWZbiLYkGLwmkcwwaHUUHinwaAuIjEALw_wcB" target="blank" > <svg xmlns="http://www.w3.org/2000/svg"  width="46" height="46" fill="currentColor" class="bi bi-facebook img mt-3 mx-3 fb " viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </a>
            <a href="https://twitter.com/home?lang=fr" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-twitter mt-3 mx-3 lien" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
            </a>
            <a href="https://www.linkedin.com/company/bleu-vif/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-linkedin mt-3 mx-3 lk" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
            </a>
        </div>
        <div class="text-center  pt-5">
        <a type="button" class="btn <?php echo ($pageremerciments['couleurbouton']);?>  " id="btn-partage"><?=$pageremerciments['textbouton'];?></a>        
        <div class="container  pt-5 envois">
          <a id="btn" type="button" class=" btn <?php echo ($pageremerciments['couleurbtncc']);?> m-3 copi"><?=$pageremerciments['textboutoncc'];?></a>
                <form>
                    <div class="mb-3 text-center">
                        <label for="exampleInputEmail1" class="form-label">Adresse mail de votre amis</label>
                        <input type="email" class="form-control mail-remerci " id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                    <button type="submit" class="btn <?php echo ($pageremerciments['bouleurbtnenvoyer']);?>"><?=$pageremerciments['textbtnenvoyer'];?></button>
                </form>
            <p class="pt-3"><?=$pageremerciments['phrasedefin'];?><p>
                <div class="d-flex text-center justify-content-center">
                    <a href="https://twitter.com/intent/tweet?text=https%3A//www.linkedin.com/company/bleu-vif/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-twitter mt-3 mx-3 lien" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.linkedin.com/company/bleu-vif/" target="blank" > <svg xmlns="http://www.w3.org/2000/svg"  width="46" height="46" fill="currentColor" class="bi bi-facebook img mt-3 mx-3 fb " viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//www.linkedin.com/company/bleu-vif/&title=Bleu%20vif%20concour&summary=&source=" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-linkedin mt-3 mx-3 lk" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a>
                </div>
        </div>
        <div class="d-flex footer justify-content-center pt-5" id="footer" >
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
    <input id="in" type="text" value="http://localhost/Jeux_concour_bleu_vif/"  class="form-control" >
    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
    <script src="js.js"></script>
</body>
</html>