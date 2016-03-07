<?php require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/views/header.php"); ?>
<h1>Nos chargeurs</h1>
<?php
foreach ($listeChargeur as $article) {
?>
	<div class="col-xs-4 col-md-4 col-sm-4">
		<fieldset id="article">
			<?= '<img class="list_image" src="/imie/boutique/assets/images/chargeur/'.$article['reference'].'.jpg">'; ?>
			<h2><?= $article['reference']; ?></h2>
			<p><?= $article['marque']; ?></p>
			<p><?= $article ['nom']; ?></p>
			<p><?= $article ['description']; ?></p>
			<p><?= $article ['prix'].' €'; ?></p>
			<input class="boutton" type="submit" value="Ajouter au panier">
		</fieldset>
	</div>
<?php
}
?>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/footer.php");
?>
