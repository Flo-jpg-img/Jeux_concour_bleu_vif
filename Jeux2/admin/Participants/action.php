<?php
 session_start();
 include 'bddparticipants.php';
 $_SESSION['alertmail']=0;
 $_SESSION['alertmailvide']=0;

 $secret = "6LezUQwcAAAAAF6pvcjpABtjVIXWk0lKgiZs4M43";
 $response = htmlspecialchars($_POST['g-recaptcha-response']);
 $remoteip = $_SERVER['REMOTE_ADDR'];
 $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
 
 $get = file_get_contents($request);
 $decode = json_decode($get, true);
 

 //var_dump($_POST);
 //die;
 

 $sql = "SELECT * FROM participants";
$requete = $bdd2->prepare($sql);
$requete->execute();
$participants = $requete->fetchALL(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM reponsegagnante";
$requete = $bdd2->prepare($sql);
$requete->execute();
$reponsegagnante = $requete->fetch(PDO::FETCH_ASSOC);

$sql="SELECT * FROM participants WHERE mail='$_POST[mail]'";
 
    $requete=$bdd2->prepare($sql);
    $requete->execute();
    $participants2=$requete->fetchAll(PDO::FETCH_ASSOC);
    
   
 
if(isset($_POST['mail'])){
    if (empty($_POST['mail'])) {
        $_SESSION['alertmailvide']=1;
        header('Location: /Jeux_concour_bleu_vif/Jeux1/inscription.php');
        die;
        
    }
   
    if (count($participants2) >= 1) {
        
        header('Location:/Jeux_concour_bleu_vif/Jeux1/inscription.php');
        
        $_SESSION['alertmail']=1;
        die;
    }
    
    $civilite=htmlentities($_POST['civilite']);
    $nom=htmlentities($_POST['nom']);
    $prenom=htmlentities($_POST['prenom']);
    $mail=htmlentities($_POST['mail']);
    $numero=htmlentities($_POST['numero']);
    $adresse=htmlentities($_POST['adresse']);
    $date=htmlentities($_POST['date']);
    //var_dump($_POST);
    
    
    
    $_SESSION['mail'] = addslashes($mail);

    
    
    

    
    $Ajout="INSERT INTO participants( nom, prenom, mail, telephone, adresse, civilite, date) VALUES ( '$nom', '$prenom', '$mail' , '$numero' , '$adresse','$civilite','$date')";
    $requette_ajout= $bdd2->prepare($Ajout);
    if (!$requette_ajout->execute()) {
        die('error grave');
    }
    
    if($decode['success']){
        echo "Ok";
        header('Location: /Jeux_concour_bleu_vif/Jeux1/Page-de-jeux.php');

        die;
    }
    }
   
    if(isset($_POST['btn-actionverif'])){
        
        

        $idjoueur=htmlentities($_POST['idjoueur']);
        $reponse1=htmlentities($_POST['reponse1']);
        $reponse2=htmlentities($_POST['reponse2']);
        $reponse3=htmlentities($_POST['reponse3']);
        $reponse4=htmlentities($_POST['reponse4']);
        $reponse5=htmlentities($_POST['reponse5']);
        
        
            $Ajout="INSERT INTO reponsejoueur( id_joueur, reponse1, reponse2, reponse3, reponse4,reponse5) VALUES ( '$_POST[idjoueur]', '$_POST[reponse1]', '$_POST[reponse2]' , '$_POST[reponse3]' , '$_POST[reponse4]','$_POST[reponse5]')";
           
            $requette_ajout= $bdd2->prepare($Ajout);
            if (!$requette_ajout->execute()) {
            die('error');
            }
            $tableau = array($reponse1, $reponse2,$reponse3,$reponse4,$reponse5);
            //var_dump($reponsegagnante);
            $tableau2 = array();
           foreach ($reponsegagnante as $key => $value) {
               if ($key != 'id') {
                   array_push($tableau2,$value);
                   
               }
           }
          //var_dump($tableau2);
            //die;
           
         
       
           for ($i=0; $i <5 ; $i++) { 
           
               if ($tableau[$i] != $tableau2[$i]) {
             
                   $gagnant=false;
                      
                   if ($gagnant=false){
                    $Ajout3="UPDATE participants SET gagnant = false WHERE mail='".$_SESSION['mail']."'";
                 
               
                             $requette_ajout= $bdd2->prepare($Ajout3);
                             if (!$requette_ajout->execute()) {
                            die('error');
                             }
                   }else{
                             
                        if ($gagnant=true) {
                
                             $Ajout2="UPDATE participants SET gagnant = true WHERE mail='".$_SESSION['mail']."'";
                 
               
                             $requette_ajout= $bdd2->prepare($Ajout2);
                             if (!$requette_ajout->execute()) {
                            die('error');
                            }
    
                    header('Location: /Jeux_concour_bleu_vif/Jeux1/page-remerciments.php');
                    die;
                }

                   }
                  
                  
                   //var_dump($gagnant);
                   //die;
               }

               }
               header('Location: /Jeux_concour_bleu_vif/Jeux1/page-remerciments.php');
               die;
               
            }
          

        
        
            

    
        
            //var_dump($decode);
          else{
               
                
            }
           ?>
      
        
