
<?php
session_start();
include 'bdd.php';

$sql = "SELECT * FROM pageremerciemnts";
$requete = $bdd->prepare($sql);
$requete->execute();
$home = $requete->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['btn-modif-remerciments-action']) && isset($_FILES['image'])) {
    echo"<pre>";
    print_r($_FILES['image']);
    echo"</pre>";
    
    $img_name = $_FILES['image']['name']; 
    $img_size = $_FILES['image']['size']; 
    $tmp_name = $_FILES['image']['tmp_name']; 
    $error = $_FILES['image']['error']; 

    if ($error === 0) {
       
    
        
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION );
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg","jpeg","png");
        if (in_array($img_ex_lc,$allowed_exs)) {
            
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path='../img/'.$new_img_name;
            move_uploaded_file( $tmp_name, $img_upload_path);

            $sql= "UPDATE pageremerciments SET imagefond='$new_img_name'";
            $imag=$bdd->prepare($sql);
            $imag->execute();
                
            
           
        }else{
            echo('erro');
        }
        

    }
    
    
}else{
    die;
    header("Location: http://localhost/Jeux_concour_bleu_vif/Jeux1/admin/admin-index.php");
}


if (isset($_POST['btn-modif-remerciments-action']) && isset($_FILES['imagecentrale'])) {
    echo"<pre>";
    print_r($_FILES['imagecentrale']);
    echo"</pre>";
    
    $img_name = $_FILES['imagecentrale']['name']; 
    $img_size = $_FILES['imagecentrale']['size']; 
    $tmp_name = $_FILES['imagecentrale']['tmp_name']; 
    $error = $_FILES['imagecentrale']['error']; 

    if ($error === 0) {
       
    
        
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION );
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg","jpeg","png");
        if (in_array($img_ex_lc,$allowed_exs)) {
            
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path='../img/'.$new_img_name;
            move_uploaded_file( $tmp_name, $img_upload_path);

            $sql= "UPDATE imagecentrale SET img_url='$new_img_name'";
            $imag=$bdd->prepare($sql);
            $imag->execute();
                
            
           
        }else{
            echo('erro');
        }
        

    }
}

if (isset($_POST['btn-modif-remerciments-action'])) {
    //var_dump($_POST);
    //die;
    $phrasedefin=addslashes($_POST['phrasedefin']);
    $textbtnenvoyer=addslashes($_POST['textbtnenvoyer']);
    $bouleurbtnenvoyer=addslashes($_POST['bouleurbtnenvoyer']);
    $textboutoncc=addslashes($_POST['textboutoncc']);
    $btnremercimentscc=addslashes($_POST['btnremercimentscc']);
    $textbtn=addslashes($_POST['boutontext']);
    $titre=addslashes($_POST['titre']);
    $phrase=addslashes($_POST['phrase']);
    $bouton=addslashes($_POST['btnremerciments']);

$sql="UPDATE pageremerciments SET titre='$titre',phrase='$phrase', textbouton='$textbtn', couleurbouton='$bouton', couleurbtncc='$btnremercimentscc',textboutoncc='$textboutoncc',bouleurbtnenvoyer='$bouleurbtnenvoyer',textbtnenvoyer='$textbtnenvoyer',phrasedefin='$phrasedefin'";

$Modif=$bdd->prepare($sql);
if (!$Modif->execute()) {
    die('error');
}

header('Location:http://localhost/Jeux_concour_bleu_vif/Jeux1/admin/admin-index.php');

die;
}





?>