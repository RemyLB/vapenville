<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/header.php")
?>
<div class="container"id="ajout">
	<h1 class="title">Prenez contact </h1>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">	
			<form action="" method="post">

			<fieldset id="contact">
				<label for="nom">Nom</label>
				<input class="form" id="Nom" type="text" name="nom" value="" placeholder="Nom" required="required"/>
				<label for="contenu">Prénom</label> 
				<input class="form" id="Prénom" rows="4" cols="50" name="prenom" value="" placeholder="Prénom" required="required"/>		
				<label for="numero_telephone_portable">Numéro de téléphone portable</label> 
				<input class="form" id="numero_telephone_portable" type="tel" name="numero_telephone_portable" value="" placeholder="Numéro téléphone portable" required="required"/>
				<label for="adresse_mail">Adresse mail</label> 
				<input class="form" id="adresse_mail" type="email" name="adresse_mail" value="" placeholder="Adresse mail" required="required"/>

				<label> Posez votre question : </label>
				<textarea rows=10 cols=40></textarea>

				<input class="boutton" type="submit" value="Envoyer un message">
			</fieldset>
		
		</form>
		</div>	
	</div>
</div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/footer.php");
?>
