<div class="med1">
<?php echo "<form action='./?action=modifmedecin&idmedecin=". $medecin->getidmedecin() . "'method='post' id='formrapport' />" ?>

        <h4>Identifiant :</h4>
        <input type="text" name="id" disabled placeholder="<?php echo ($medecin->getidmedecin()); ?>" />
        <h4>Nom :</h4>
        <input type="text" name="nom" placeholder="<?php echo ($medecin->getnommedecin()); ?>" />
        <h4>Prénom :</h4>
        <input type="text" name="prenom" placeholder="<?php echo ($medecin->getprenommedecin()); ?>" />
        <h4>Adresse :</h4>
        <input type="text" name="adresse" placeholder="<?php echo ($medecin->getadressemedecin()); ?>" />
        <h4>Téléphone :</h4>
        <input type="text" name="tel" placeholder="<?php echo ($medecin->gettelmedecin()); ?>" />
        <h4>Spécialité Complémentaire :</h4>
        <input type="text" name="specialitecomplementaire" placeholder="<?php echo ($medecin->getspecialitecomplementaire()); ?>" />
        <h4>Département :</h4>
        <input type="text" name="departement" placeholder="<?php echo ($medecin->getdepartement()); ?>" />

        <input type="submit" value="Modifier" required />
    </form>
</div>