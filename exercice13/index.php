<style>
    div{
        display:flex;
        flex-direction:column;
        margin:3em 3em 4em 3em ;
    }
    p{
        color:red;
    }
    .couleur{
        border:2px solid red;
    }
</style>
<?php
session_start();
if(isset($_COOKIE['phrase'])){
  var_dump($_COOKIE['phrase']);
}
if(isset($_SESSION['erreur'])){
  var_dump($_SESSION['erreur']);
}
if(isset($_SESSION['phrase'])){
    var_dump($_SESSION['phrase']);
  }
  

?>
<a href="../exercice12"> 12 < < <</a> | <a href="../exercice14"> > > > 14</a>
</p>
        <i>VOUS ETES DANS EXERCICE 13 </i>
<br>
<div>
    <form action="controller.php" method="POST">
        <label for="te"> Ecrire des  phrases:</label>
        <br>
        <textArea id="te"  name="phrase" cols="130" rows="3"  
         class="<?=(isset($_SESSION['erreur']))?'couleur':''?>"
        >
        <?=(isset($_SESSION["post"]['phrase']))?$_SESSION['post']['phrase']:""?>
        </textArea>
        <p>
            <?=(isset($_SESSION["erreur"]))?$_SESSION['erreur']['erreur']:""?>
        </p>
        <input type="submit" name="valider" value="valider"/>
    </form>
    <form action="controller.php" method="POST">
        <label for="co"> Apres corection de la phrase:</label>
        <br>
        <textArea id="co" name="phrase_corrige" readonly cols="130" rows="3">
         <?=isset($_COOKIE['phrase'])?$_COOKIE['phrase']:""?>
        </textArea>
        
    </form>
</div>
<?php
  if(isset($_SESSION['erreur'])){
    unset($_SESSION['erreur']);
  }
  if(isset($_SESSION['post'])){
    unset($_SESSION['post']);
  }
  if(isset($_COOKIE['phrase'])){
    setcookie("phrase","");
  }
?>