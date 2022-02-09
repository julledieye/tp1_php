
<link rel="stylesheet" type="text/css" href="css/stylle.css">
<?php
include_once('fonction.php');
    session_start();
    if(isset($_SESSION['tabValide']) || isset($_SESSION['tabInValide'])){    
        $tabValide=$_SESSION['tabValide'];
        $tabInValide=$_SESSION['tabInValide'];
        $nombr1="";
        $nombr2="";
       }else{
    }
  
?>
<div class="container">
    <form action="controller.php" method="POST" >
        <label for="text"> Saisir un nombre :</label>
        <br>
        
        <textArea  cols="100" rows="1" id="text" name="numero" class=" <?php if(isset($_SESSION['tabErreur']['teste'])) echo 'couleur';else echo '';?>">
        </textArea>
        <?php if(isset($_SESSION['tabErreur']['teste'])):?>
            <span><?php echo "".$_SESSION['tabErreur']['teste'];?></span>
        <?php endif?>
        <br>
        <br>
        <input type="submit" name="valider" value="valider"/>
    </form>
    <form>
        <label for="ok"> Voici les nombres valides :</label>
        <br>
        <textArea id="ok" name="valide" cols="100" rows="1" readonly>
        <?=isset($nombr1)?getResulat($tabValide):"" ?>
        </textArea>
        <br>
        <label for="ko"> Voici les nombres invalides :</label>
        <br>
        <textArea id="ko" name="valide" cols="100" rows="1" readonly>
        <?=isset($nombr2)?getResulat($tabInValide):''?>
        </textArea>
        <br>
    </form>
</div>
<?php
if(isset($_SESSION['tabErreur'])){
    unset($_SESSION['tabErreur']);
}else{
    unset($_SESSION['tabValide']);
    unset($_SESSION['tabInValide']);
}
?>