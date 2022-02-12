<?php
session_start();
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $err=[];
    estValide($_REQUEST['nombre'],"nombre",$err);

    if(count($err)==0){
        $_SESSION['nombre']=$_POST['nombre'];
        header('location:index.php');
    }else{
        $_SESSION['err']=$err;
        header('location:index.php');
    }
}


?>