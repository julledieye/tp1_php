<?php
session_start();
include_once('fonction.php');
if(isset($_POST['valider'])){
    $phrase = $_POST['phrase'];
    $erreur=[];
    estValide($phrase,"erreur",$erreur);
    if(count($erreur)==0){   
        (ctype_upper ($phrase)) ;
        
    }else{
        $_SESSION['erreur']=$erreur;
        header('location:index.php');
    }
}
?>