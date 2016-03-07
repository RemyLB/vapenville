<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/header.php");
?>
	<form method="post">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<fieldset>
				<h3 class="title">Connection</h3>
				<input class="form" type="email" name="adresse_mail" placeholder="email@email.email" value="" required="required"/>
				<input class="form"type="password" name="mot_de_passe" required="required"/>
				<a href="/imie/boutique/index.php?c=utilisateur&a=connect" class="boutton">Se connecter </a>
				<input type="checkbox" name="souvenir" id="souvenir">
				<label for="souvenir">Se souvenir de moi</label>
			</fieldset>
		</div>
	</form>
	<form method="post">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<fieldset>
			<h3 class="title">Pas encore client ? Inscrivez-vous ! </h3>
			<a href="/imie/boutique/index.php?c=utilisateur&a=insert" class="boutton">S'inscrire </a>
			</fieldset>
		</div>
	</form>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/footer.php");
?>