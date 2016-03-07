<?php
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/views/header.php");
?>
<h1>Nos e-Liquides</h1>

<?php
foreach ($listeEliquide as $article) {
?>
	<div class="col-xs-4 col-md-4 col-sm-4">
		<fieldset id="article">
			<?= '<img class="list_image" src="/imie/boutique/assets/images/'.$article['reference'].'.jpg">'; ?>
			<h2><?= $article['marque']; ?></h2>
			<p><?= $article ['nom']; ?></p>
			<p><?= $article ['description']; ?></p>
			<p><?= $article ['prix'].' €'; ?></p>
			<p><?= $article ['dosage'].' mg'; ?></p>
			<p><?= $article ['quantite'].' ml'; ?></p>
			<input class="boutton" type="submit" value="Ajouter au panier">
		</fieldset>
	</div>
<?php
}
?>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/footer.php");
?>
