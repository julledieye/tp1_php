<style>
    div{
        display:flex;
        flex-direction:column;
        margin:3em 3em 4em 3em ;
    }
</style>
<?php
session_start();
include_once('fonction.php');


?>
<div>
    <form action="controller.php" method="POST">
        <label for="te"> Ecrire des  phrases:</label>
        <br>
        <textArea id="te"  name="phrase" cols="130" rows="10" style="resize:none;" >
        
        </textArea>
        <span> <?php (isset($_SESSION['sms']))?$_SESSION['sms']:'' ?></span>
        <br>
        <input type="submit" name="valider" v="valider"/>
    </form>
    <form action="controller.php" method="POST">
        <label for="co"> Apres corection de la phrase:</label>
        <br>
        <textArea id="co" name="phrase_corrige" readonly cols="130" rows="10">
         
        </textArea>
        
    </form>
</div>
<?php
  
?>