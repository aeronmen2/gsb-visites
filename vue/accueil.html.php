<container class="glassp">
    <div class="glass1">
        <img class="imgprofil" src="./images/medecin/<?php echo rand(1, 14) ?>.png" />
        <div id="info">
            <h1>Bienvenue <?php echo "<a>" . $visiteur->getprenomvisiteur() . "</a>"; ?> <?php echo "<a>" . $visiteur->getnomvisiteur() . "</a>"; ?> !</h1>
            <p>Adresse : <?php echo "<a>" . $visiteur->getadressevisiteur() . "</a>"; ?> </p>
            <p>Ville : <?php echo "<a>" . $visiteur->getvillevisiteur() . "</a>"; ?> </p>
            <p>Code Postal : <?php echo "<a>" . $visiteur->getcpvisiteur() . "</a>"; ?> </p>
            <p>Date d'embauche : <?php echo "<a>" . $visiteur->getdateembauchevisiteur() . "</a>"; ?> </p>
            <div class="buttonacc">
                <a data-tilt data-tilt-scale="1.112" href="./?action=deconnexion" class="cool"></i>Déconnexion</a>
            </div>
        </div>
    </div>

    <div class="glass2">
        <h1 id="titreacc"> Liste médecins : </h1>
        <?php
        for ($j = 0; $j < count($medecin5); $j++) { ?>
            <div class="boxa">
                <?php echo "<h1 id='id'>" . $medecin5[$j]->getidmedecin() . "</h1>"; ?>
                <h4><?php echo "<a>" . $medecin5[$j]->getprenommedecin() . "</a>"; ?> <?php echo "<a>" . $medecin5[$j]->getnommedecin() . "</a>"; ?></h4>
                <?php echo "<h4>Adresse : " . $medecin5[$j]->getadressemedecin() . "</h4>"; ?>
                <?php echo "<h4>Téléphone : <a href='tel:06215489151'>" . $medecin5[$j]->gettelmedecin() . "</a></h4>"; ?>
                <?php echo "<h4>Spécialité : " . $medecin5[$j]->getspecialitecomplementaire() . "</h4>"; ?>
                <?php echo "<h4>Département : " . $medecin5[$j]->getdepartement() . "</h4>"; ?>
                <?php echo "<a id='formbtt' href='./?action=detailmedecin&idmedecin=" . $medecin5[$j]->getidmedecin() . "'/>" ?>Modifier</a>
            </div>
        <?php } ?>
        <div class="buttonacc">
            <a data-tilt data-tilt-scale="1.112" href="./?action=medecin" class="cool"><i class="fas fa-bars"></i>Plus de médecins...</a>
        </div>
    </div>

    <div class="glass3">
        <h1 id="titreacc"> Derniers rapports : </h1>
        <div class="box">
            <?php
            for ($i = 0; $i < 5; $i++) { ?>
                <div class="boxe">
                    <?php echo "<h1 id='id'>" . $vosdernierrapport[$i]->getidrapport() . "</h1>"; ?>
                    <?php echo "<h4>Date : " . $vosdernierrapport[$i]->getdaterapport() . "</h4>"; ?>
                    <?php echo "<h4>Motif : " . $vosdernierrapport[$i]->getmotifrapport() . "</h4>"; ?>
                    <?php echo "<h4>Bilan : " . $vosdernierrapport[$i]->getbilanrapport() . "</h4>"; ?>
                    <?php echo "<h4>Id Visiteur : " . $vosdernierrapport[$i]->getidvisiteur() . "</h4>"; ?>
                    <?php echo "<h4>Id Medecin : " . $vosdernierrapport[$i]->getidmedecin() . "</h4>"; ?>
                    <?php echo "<a id='formbtt2' href='./?action=detailrapport&idrapport=" . $vosdernierrapport[$i]->getidrapport() . "'/>" ?>Modifier</a>
                </div>
            <?php } ?>
        </div>
        <div class="buttonacc">
            <a data-tilt data-tilt-scale="1.112" href="./?action=rapport" class="cool"><i class="fas fa-bars"></i>Rapports...</a>
        </div>
    </div>
</container>