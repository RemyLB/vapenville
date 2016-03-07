<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/header.php")
?>
<div class="container"id="ajout">
	<h1 class="title">Inscription </h1>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8">	
			<form action="" method="post">

			<fieldset id="registred">
				<label for="nom">Nom</label>
				<input class="form" id="Nom" type="text" name="nom" value="" placeholder="Nom" required="required"/>
				<label for="contenu">Prénom</label> 
				<input class="form" id="Prénom" rows="4" cols="50" name="prenom" value="" placeholder="Prénom" required="required"/>
				<label for="adresse">Adresse</label>
				<input class="form" id="Adresse" type="text" name="adresse" value="" placeholder="Adresse" required="required" />
				<label for="ville">Ville</label> 
				<input class="form" id="Ville" type="text" name="ville" value="" placeholder="Ville" required="required"/>
				<label for="code_postal">Code postal</label> 
				<input class="form" id="Code_postal" type="text" name="code_postal" value="" placeholder="Code postal" required="required"/>
				<label for="pays">Pays</label> 
				<input class="form" id="Pays" type="text" name="pays" value="" placeholder="Pays" required="required"/>
				<label for="numero_telephone_fixe">Numéro téléphone fixe</label> 
				<input class="form" id="numero_telephone_fixe" type="text" name="numero_telephone_fixe" value="" placeholder="Numéro téléphone fixe"/>				
				<label for="numero_telephone_portable">Numéro téléphone portable</label> 
				<input class="form" id="numero_telephone_portable" type="tel" name="numero_telephone_portable" value="" placeholder="Numéro téléphone portable" required="required"/>
				<label for="adresse_mail">Adresse mail</label> 
				<input class="form" id="adresse_mail" type="email" name="adresse_mail" value="" placeholder="Adresse mail" required="required"/>
				<label for="mot_de_passe">Mot de passe</label> 
				<input class="form" id="mot_de_passe" type="password" name="mot_de_passe" value="" placeholder="Mot de passe" required="required"/>

				<input class="boutton" type="submit" value="S'inscrire">
			</fieldset>
		
		</form>
		</div>	
	</div>
</div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/footer.php");
?>
