<form action="controller.php" method="POST">
    <br>
    <fieldset>
        <legend> Choix:</legend>
        <label for="">Taille de la matrice :</label>
        <input type="text" name="taille"/>
        <span></span>
        <br>
        <br>
        <label>choix de la couleur : </label>
        <select name="position">
            <option value="blue">BLEU</option>
            <option value="rouge">ROUGE</option>
        </select>
        <br>
        <br>
        <label for="haut">HAUT</label>
        <input id="haut" type="radio" name="couleur" value="haut"/>
        <br>
        <label for="bas">HAUT</label>
        <input id="bas" type="radio" name="couleur" value="bas"/>
        <br>
        <br>
        <input type="submit" name="valider" value="valider"/>
    </fieldset>
</form>