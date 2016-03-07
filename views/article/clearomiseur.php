<?php require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/views/header.php"); ?>
<h1>Nos clearomiseurs</h1>
<?php
// var_dump($listeArticle);
foreach ($listeClearomiseur as $article) {

?>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<fieldset id="article">
			<?= '<img class="list_image" src="/imie/boutique/assets/images/clearomiseur/'.$article['reference'].'.jpg">'; ?>
			<h2><?= $article['marque']; ?></h2>
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
