<?php 
session_start();
include 'bdd.php';


?>
<?php
if (isset($_POST['btn-modif-jeux-action']) && isset($_FILES['image'])) {
        
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

            $sql= "UPDATE imagejeux SET img_url='$new_img_name'";
            $imag=$bdd->prepare($sql);
            $imag->execute();
                
            
           
        }else{
            echo('erro');
        }
        

    }
    
}else{
    die;
    header("Location:/Jeux_concour_bleu_vif/Jeux1/admin/admin-index.php");
}


if (isset($_POST['btn-modif-jeux-action'])) {
  
   $bouton=$_POST['btnjeux'];
    $titre=addslashes($_POST['titre']);
    $textbtn=addslashes($_POST['boutontext']);
    $question1=addslashes($_POST['question1']);
    $question2=addslashes($_POST['question2']);
    $question3=addslashes($_POST['question3']);
    $question4=addslashes($_POST['question4']);
    $question5=addslashes($_POST['question5']);
    $reponse1=addslashes($_POST['reponse1']);
    $reponse2=addslashes($_POST['reponse2']);
    $reponse3=addslashes($_POST['reponse3']);
    $reponse4=addslashes($_POST['reponse4']);
    $reponse5=addslashes($_POST['reponse5']);
    $reponse6=addslashes($_POST['reponse6']);
    $reponse7=addslashes($_POST['reponse7']);
    $reponse8=addslashes($_POST['reponse8']);
    $reponse9=addslashes($_POST['reponse9']);
    $reponse10=addslashes($_POST['reponse10']);
    $reponse11=addslashes($_POST['reponse11']);
    $reponse12=addslashes($_POST['reponse12']);
    $reponse13=addslashes($_POST['reponse13']);
    $reponse14=addslashes($_POST['reponse14']);
    $reponse15=addslashes($_POST['reponse15']);   
    $reponse16=addslashes($_POST['reponse16']);
    $reponse17=addslashes($_POST['reponse17']);
    $reponse18=addslashes($_POST['reponse18']);
    $reponse19=addslashes($_POST['reponse19']);
    $reponse20=addslashes($_POST['reponse20']);
 
   
   ;
    
    
    $sql="UPDATE jeux SET titre='$titre',  bouton='$bouton',textbouton='$textbtn', question1='$question1', question2='$question2',
    question3='$question3' , question4='$question4', question5='$question5', reponse1='$reponse1' , reponse2='$reponse2' ,
    reponse3='$reponse3',reponse4='$reponse4',reponse5='$reponse5',reponse6='$reponse6',reponse7='$reponse7',reponse8='$reponse8',
    reponse9='$reponse9', reponse10='$reponse10', reponse11='$reponse11', reponse12='$reponse12', reponse13='$reponse13',
    reponse14='$reponse14', reponse15='$reponse15', reponse16='$reponse16', reponse17='$reponse17', reponse18='$reponse18',
    reponse19='$reponse19', reponse20='$reponse20'";
    
   //echo($sql);
   //die;
    $Modif=$bdd->prepare($sql);
    if (!$Modif->execute()) {
        die('error');
    }
    
    header('Location: /Jeux_concour_bleu_vif/Jeux1/admin/admin-index.php');
    
    die;
    }






