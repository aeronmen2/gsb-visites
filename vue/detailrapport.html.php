<div class="med1">
<?php echo "<form action='./?action=modifrapport&idrapport=". $rapport->getidrapport() ."'method='post' id='formrapport'/>" ?>

        <h4>Id rapport :</h4>
        <input type="text" name="idrapport" disabled placeholder="<?php echo ($rapport->getidrapport()); ?>" />
        <h4>Motif :</h4>
        <input type="text" name="motifrapport" placeholder="<?php echo ($rapport->getmotifrapport()); ?>" />
        <h4>Bilan :</h4>
        <input type="text" name="bilanrapport" placeholder="<?php echo ($rapport->getbilanrapport()); ?>" />

        <input type="submit" value="Modifier" required />
    </form>
</div>