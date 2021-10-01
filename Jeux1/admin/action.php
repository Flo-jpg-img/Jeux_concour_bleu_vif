
<?php
session_start();
include 'Participants/bddparticipants.php';
include 'bdd.php';


$sql = "SELECT * FROM home";
$requete = $bdd->prepare($sql);
$requete->execute();
$home = $requete->fetch(PDO::FETCH_ASSOC);





    
    if (isset($_POST['btn-deco'])) {
        echo('ok');
        $_SESSION = array();
        header('location:http://localhost/jeux_concour_bleu_vif/Jeux1/admin/connexion/index.php');
        die;
        }
if (isset($_POST['btn-modif-index-action']) && isset($_FILES['image'])) {
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

            $sql= "UPDATE images SET img_url='$new_img_name'";
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

if (isset($_POST['btn-modif-index-action'])) {
    
    
$textbtn=htmlspecialchars($_POST['text-btn'], ENT_QUOTES);
$titre=$_POST['titre'];
$date=$_POST['date'];
$phrase=$_POST['phrase'];
$bouton=$_POST['button'];

$sql="UPDATE home SET titre='$titre', date='$date',phrase='$phrase', text_btn='$textbtn', bouton='$bouton'";

$Modif=$bdd->prepare($sql);
if (!$Modif->execute()) {
    die('error');
}

header('Location:http://localhost/Jeux_concour_bleu_vif/Jeux1/admin/admin-index.php');

die;
}




?>