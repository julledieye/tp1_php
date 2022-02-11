<style>
.couleur{
    border:1px solid red;
}

</style>

<?php
session_start();
if(isset($_SESSION['err'])){
     var_dump($_SESSION['err']);
}

?>

<form action="controller.php" method="POST">
    <br>
    <fieldset>
        <legend> Choix:</legend>
        <label for="">Taille de la matrice :</label>
        <input type="text" name="taille" class=" <?=(isset($_SESSION['err']))?'couleur':'' ?>"/>
        <span style="color:red;">
        <?=(isset($_SESSION['err']))?$_SESSION['err']['taille']:"" ?>
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
        <label for="bas">HAUT:</label>
        <input id="bas" type="radio" name="position" value="haut"/>
        <br>
        <br>
        <label for="bas">BAS :</label>
        <input id="bas" type="radio" name="position" value="bas" />
        <br>
        <br>
        <input type="submit" name="valider" value="valider"/>
    </fieldset>
</form>
<?php
if(isset($_SESSION['err'])){
     unset($_SESSION['err']);
}

?>