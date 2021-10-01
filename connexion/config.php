<?php 
session_start();

function isConnect(){
    if (isset($_SESSION['connect']) && $_SESSION['connect'] == true) {
      return true;
    }
    return false;
  }


?>