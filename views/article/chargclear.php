<?php
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/views/header.php");
?>

<div class="container">
	<h1>Ici, notre plus grand choix de chargeurs et d'accessoires</h1>
</div>

<div class="col-xs-6 col-sm-6">
	<fieldset id="fieldset">
		<a href="/imie/boutique/index.php?c=article&a=chargeur">
		<img src="/imie/boutique/assets/images/chargeur.jpg">
		<h2>Chargeur</h2></a>
	</fieldset>
</div>
<div class="col-xs-6 col-sm-6">
	<fieldset id="fieldset">
		<a href="/imie/boutique/index.php?c=article&a=clearomiseur">
		<img src="/imie/boutique/assets/images/clearomiseur.jpg" >
		<h2>Clearomiseur</h2></a>
	</fieldset>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/footer.php");
?>
