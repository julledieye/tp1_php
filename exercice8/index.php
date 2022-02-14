<style>
.couleur{
    border: 1px solid red;
    font-size:bold;
}
</style>
<?php
session_start();
?>
<p>
    <a href="../exercice7"> 7 < < <</a> | <a href="../exercice9"> > > > 9</a>
</p>
        <p>VOUS ETES DANS EXERCICE 8 </p>
<link rel="stylesheet" type="text/css" href="css/stylle.css">
	<form action="controller.php" method="POST">
            <div>
                <span>Nombre</span> 
                <input type="text" name="nombre" class="<?=isset($_SESSION['err']['nombre'])?'couleur':'' ?>" >
                <span style="color:red;">
                  <?=isset($_SESSION['err']['nombre'])?$_SESSION['err']['nombre']:''?>
                </span>
                <p></p>
                <input type="submit" name="valider">
            </div>
  </form>
    <ul type='circle'>
    <?php if(isset($_SESSION['nombre'])){
      for($i=0 ; $i<$_SESSION['nombre'] ; $i++){ ?>
        <li><?= $i ?></li>
    <?php }}?>
    </ul>
<?php 
  if(isset($_SESSION['err'])){
    unset($_SESSION['err']);
  }
  if(isset($_SESSION['nombre'])){
    unset($_SESSION['nombre']);
  }
?>
