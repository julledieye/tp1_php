<link rel="stylesheet" type="text/css" href="css/stylle.css">
<?php
session_start();
include_once('fonction.php');
?>
<form action="controller.php" method="POST">
    <br>
    <fieldset>
        <legend> Choix:</legend>
        <label for="">Taille de la matrice :</label>
        <input type="text" name="taille" />
        <span class="red_erreur">
        <?=(isset($_SESSION['err']['taille']))?$_SESSION['err']['taille']:"" ?>
        </span>
        <br>
        <br>
        <label>choix de la couleur : </label>
        <select name="couleur">
            <option value="blue">BLEU</option>
            <option value="rouge">ROUGE</option>
        </select>
        <br>
        <br>
        <label for="haut">HAUT:</label>
        <input id="haut" type="radio" name="position" value="haut" />
        <label for="bas">BAS :</label>
        <input id="bas" type="radio" name="position" value="bas" />
        
        <p style="color:red;">
            <?=isset($_SESSION['erreur'])?$_SESSION['erreur']:'' ?>
        </p>
        <input type="submit" name="valider" value="valider"/>
    </fieldset>
</form>

<?php

?>
<?php
if(isset($_SESSION['err'])){
     unset($_SESSION['err']);
}
if(isset( $_SESSION['matrice'])){
    unset($_SESSION['matrice']);
}
if(isset($_SESSION['erreur'])){
    unset($_SESSION['erreur']);
}
if(isset($_SESSION['post'])){
    unset($_SESSION['post']);
}

?>