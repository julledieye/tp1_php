<?php
session_start();
include_once('fonction.php');
if($_REQUEST['valider'] && isset($_REQUEST['position'])){
   $taille=$_REQUEST['taille'];
   $position=$_REQUEST['position'];
   $couleur=$_REQUEST['couleur'];
   $err=[];
   estValide($taille,"taille",$err);
   if(count($err)==0){
    echo "ok";
   
   }else{
        //var_dump($_REQUEST);
        $_SESSION['err']=$err;
        header('location:index.php');
        exit();
   }
}else{
    header('location:index.php');
        exit();
}

?>