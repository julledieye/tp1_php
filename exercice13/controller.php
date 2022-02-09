<?php
session_start();
include_once('fonction.php');
if(isset($_POST['valider'])){
    $phrase = ltrim($_POST['phrase']) ;
   
}else{
    if(empty($_REQUEST['phrase'])){
        $_SESSION['sms']="le champs ne doit pas etre vide";
        header('location:index.php');
    }
}
?>