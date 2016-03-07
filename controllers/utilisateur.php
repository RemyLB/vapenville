<?php

require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/models/utilisateur.php");

class Controller_Utilisateur {
	public function addUtilisateur() {

		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/views/utilisateurs/inscription.php");

		if(!empty($_POST)){

			$nom = htmlspecialchars($_POST['nom']);
			$prenom = htmlspecialchars($_POST['prenom']);
			$adresse = htmlspecialchars($_POST['adresse']);
			$ville = htmlspecialchars($_POST['ville']);
			$code_postal = htmlspecialchars($_POST['code_postal']);
			$pays = htmlspecialchars($_POST['pays']);
			$numero_telephone_fixe = htmlspecialchars($_POST['numero_telephone_fixe']);
			$numero_telephone_portable = htmlspecialchars($_POST['numero_telephone_portable']);
			$adresse_mail = htmlspecialchars($_POST['adresse_mail']);
			$mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
			$utilisateur = new Model_Utilisateur();			
			$utilisateurDetails = $utilisateur ->addUtilisateur($nom, $prenom, $adresse, $ville, $code_postal, $pays, $numero_telephone_fixe, $numero_telephone_portable, $adresse_mail, $mot_de_passe);
			if ($utilisateurDetails) {
				$connectUtilisateur = $utilisateur->connectUtilisateur($adresse_mail, $mot_de_passe);
				var_dump($connectUtilisateur);
				if (!empty($connectUtilisateur)) {
					$_SESSION['id_utilisateur'] = $connectUtilisateur[0]['id'];
					$_SESSION['nom'] = $connectUtilisateur[0]['nom'];
					$_SESSION['prenom'] = $connectUtilisateur[0]['prenom'];
					$_SESSION['adresse'] = $connectUtilisateur[0]['adresse'];
					$_SESSION['ville'] = $connectUtilisateur[0]['ville'];
					$_SESSION['code_postal'] = $connectUtilisateur[0]['code_postal'];
					$_SESSION['pays'] = $connectUtilisateur[0]['pays'];
					$_SESSION['numero_telephone_fixe'] = $connectUtilisateur[0]['numero_telephone_fixe'];
					$_SESSION['numero_telephone_portable'] = $connectUtilisateur[0]['numero_telephone_portable'];
					$_SESSION['adresse_mail'] = $connectUtilisateur[0]['adresse_mail'];
					$_SESSION['mot_de_passe'] = $connectUtilisateur[0]['mot_de_passe'];
				}
			}
		}
	}

	public function connectUtilisateur() {

		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/views/utilisateurs/espace_client.php");

		if(!empty($_POST)) {
			
			$adresse_mail = htmlspecialchars($_POST('adresse_mail'));
			$mot_de_passe = htmlspecialchars($_POST('mot_de_passe'));

			$utilisateur = new Model_Utilisateur();
			$utilisateurDetails = $utilisateur->connectUtilisateur($adresse_mail, $mot_de_passe);
			var_dump($utilisateurDetails);
			if($utilisateurDetails) {
				$_SESSION['id_utilisateur'] = $utilisateurDetails['id'];
				$_SESSION['nom'] = $utilisateurDetails['nom'];
				$_SESSION['prenom'] = $utilisateurDetails['prenom'];
				$_SESSION['adresse'] = $utilisateurDetails['adresse'];
				$_SESSION['ville'] = $utilisateurDetails['ville'];
				$_SESSION['code_postal'] = $utilisateurDetails['code_postal'];
				$_SESSION['pays'] = $utilisateurDetails['pays'];
				$_SESSION['numero_telephone_fixe'] = $utilisateurDetails['numero_telephone_fixe'];
				$_SESSION['numero_telephone_portable'] = $utilisateurDetails['numero_telephone_portable'];
				$_SESSION['adresse_mail'] = $utilisateurDetails['adresse_mail'];
				header('location:/IMIE/boutique/index.php');
				}
			}
		}
	
	public function contact() {
	$utilisateur = new Model_Utilisateur();
	$contact =$utilisateur->contact();
	require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/utilisateurs/contact_us.php');
	}
}
?>