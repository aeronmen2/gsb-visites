<container class="boxrapport">

	<div class="rapp1">
		<a class="cool"> <i class="fas fa-edit"></i>Créer un rapport </a>
		<form action="./?action=CreationRapport" method="post" id="formrapport">

			<input type="date" name="date" value="<?php date('Y-m-d'); ?>" required />
			<textarea name="motif" placeholder="Motif du rapport" required></textarea>
			<textarea name="bilan" placeholder="Bilan du rapport" required></textarea>
			<select name="medicament" required>
				<option value="" disabled selected hidden> Liste des médicaments </option>
				<?php
				for ($i = 0; $i < count($collectionmedicaments); $i++) { ?>
					<option value="<?php echo $collectionmedicaments[$i]->getidmedicament(); ?>"><?php echo $collectionmedicaments[$i]->getnomcommercial(); ?></option>
				<?php } ?>
			</select>

			<input type="number" name="quantite" value="quantite" placeholder="Quantité" required />

			<select name="medecin" class="ui fluid search dropdown" required>
				<option value="" disabled selected hidden> Liste des médecins</option>
				<?php
				for ($i = 0; $i < count($collectionmedecins); $i++) { ?>
					<option value="<?php echo $collectionmedecins[$i]->getidmedecin(); ?>"> <?php echo $collectionmedecins[$i]->getnommedecin() . "&nbsp" . $collectionmedecins[$i]->getprenommedecin(); ?></option>
				<?php } ?>
			</select>
			<input type="submit" value="Valider" required />
		</form>
	</div>

	<div class="rapp2">
		<a class="cool"> <i class="fas fa-list"></i>Liste des rapports </a>
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
            <a data-tilt data-tilt-scale="1.112" href="./?action=listerapport" class="cool"><i class="fas fa-bars"></i>Rapports...</a>
        </div>
	</div>
</container>