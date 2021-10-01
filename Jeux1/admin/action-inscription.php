<?php 
session_start();
include 'bdd.php';


?>
<?php



if (isset($_POST['btn-modif-inscription-action']) && isset($_FILES['image'])) {
        
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

            $sql= "UPDATE imagesinscription SET img_url='$new_img_name'";
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






if (isset($_POST['btn-modif-inscription-action'])) {
    
    $_SESSION['btninscription'] = $_POST['btninscription'];
   
    $textbtn=htmlspecialchars($_POST['boutontext'], ENT_QUOTES);
    $titre=htmlspecialchars($_POST['titre'], ENT_QUOTES);
    $date=$_POST['date'];
    $bouton=$_POST['btninscription'];
    
   ;
    
    
    $sql="UPDATE inscription SET titre='$titre', date='$date', boutontext='$textbtn', bouton='$bouton'";
    
    $Modif=$bdd->prepare($sql);
    if (!$Modif->execute()) {
        die('error');
    }
    
    header('Location:http://localhost/Jeux_concour_bleu_vif/Jeux1/admin/admin-index.php');
    
    die;
    }
