<?php
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/views/header.php");
?>

<div class="container">
	<h1>Ici, notre plus grand choix de cigarettes electroniques et de mods</h1>
</div>

<div class="col-xs-6 col-sm-6">
	<fieldset id="fieldset">
		<a href="/imie/boutique/index.php?c=article&a=cigarette">
		<img src="/imie/boutique/assets/images/cigarette.jpg">
		<h2>Cigarettes</h2></a>
	</fieldset>
</div>
<div class="col-xs-6 col-sm-6">
	<fieldset id="fieldset">
		<a href="/imie/boutique/index.php?c=article&a=mod">
		<img src="/imie/boutique/assets/images/mod.jpg" >
		<h2>Mods</h2></a>
	</fieldset>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/footer.php");
?>
