
<?php
session_start();
 include '../Jeux1/admin/Participants/bddparticipants.php';
 



if (isset($_POST['btn-login'])) {
    
    $mail=htmlentities($_POST['mail']);
    $mdp=htmlentities($_POST['mdp']);

    $sql="SELECT * FROM conexion WHERE email='".$mail."'";
   
    $requete=$bdd2->prepare($sql);
    $requete->execute();
    $conexion=$requete->fetchAll(PDO::FETCH_ASSOC);
   

    if (count($conexion) > 0) {
        if (!password_verify($mdp, $conexion[0]['mdp'])) {
            //var_dump(!password_verify($mdp, $utilisateur[0]['mdp']));
            //die;
            header('location: index.php');
            die;
        }
        $_SESSION['connect'] = true;
        unset($conexion[1]['mdp']);
        $_SESSION['conexion'] = $conexion[0];
        
        
   
       
   
    
        header('location: ../Jeux_index/index_jeux.php');
            die;
    }
    header('location: index.php');
    die;
}
?>