<?php
session_start();
include_once('fonction.php');
if(isset($_POST['valider'])){
    $phrase = $_POST['phrase'];
    $erreur=[];
    estValide($phrase,"erreur",$erreur);
    if(count($erreur)==0){   
        deletEspace($phrase);
        deletCareEsp($phrase);
       deletEsBefor($phrase);
       setcookie("phrase",$phrase);
       header('location:index.php');
        //echo "<p>1 ".$phrase."</p>"." longueur est ".strlen($phrase) ;
       //var_dump(estMaju($phrase));
       /*var_dump($phrase);
       echo "<br>" ;
    
        //$phrase=str_replace(' , ',', ',$phrase);
       
       echo "<br>" ;
       var_dump($phrase);
       
      // echo "<p>2 ".$phrase."</p>"." longueur est ".strlen($phrase) ;
       //var_dump(estLong($phrase));
       /*$_SESSION['phrase']=$phrase;
       header('location:index.php');*/
        
    }else{
        $_SESSION['erreur']=$erreur;
        $_SESSION['post']=$_POST;
        header('location:index.php');
    }
}
?>