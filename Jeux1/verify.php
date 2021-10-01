<?php 

    
        $secret = "6LezUQwcAAAAAF6pvcjpABtjVIXWk0lKgiZs4M43";
        $response = htmlspecialchars($_POST['g-recaptcha-response']);
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";

        $get = file_get_contents($request);
        $decode = json_decode($get, true);
        var_dump($decode);
        if($decode['success']){
            echo "Ok";
            die;
        }else{
            echo "Error";
            die;
        }
           
    

    ?>