<?php
session_start();
    require_once('fonction.php');
    if(isset($_REQUEST['valider'])){
        $numero = trim($_REQUEST['numero']) ;
        $tabErreur=[] ;
        $tabNum=[];
        $tabValide=[];
        $tabInValide=[];
        decouper($numero,$tabNum);
        remplirTab($tabNum , $tabValide, $tabInValide) ;
        estValide($numero,"teste",$tabErreur);
        if(count($tabErreur)==0){
            $_SESSION['tabValide']=$tabValide;
            $_SESSION['tabInValide']=$tabInValide;
            header('location:index.php');
        }else{
              $_SESSION['tabErreur']=$tabErreur;
              header('location:index.php');
        }
    }
?>