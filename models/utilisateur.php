<?php
require($_SERVER['DOCUMENT_ROOT']."IMIE/boutique/library/db.php");
class Model_Utilisateur{
	private $db;

	public function __construct() {
		$this->db = DB::getInstance();
	}
	
	public function addUtilisateur($nom, $prenom, $adresse, $ville, $code_postal, $pays, $numero_telephone_fixe, $numero_telephone_portable, $adresse_mail, $mot_de_passe){
		$query = 'INSERT INTO clients (nom, prenom, adresse, ville, code_postal, pays, numero_telephone_fixe, numero_telephone_portable, adresse_mail, mot_de_passe) 
		VALUES(:nom, :prenom, :adresse, :ville, :code_postal, :pays, :numero_telephone_fixe, :numero_telephone_portable, :adresse_mail, :mot_de_passe);';
		$tab = array(
		'nom' => $nom,
		'prenom' => $prenom,
		'adresse' => $adresse,
		'ville' => $ville,
		'code_postal' => $code_postal,
		'pays' => $pays,
		'numero_telephone_fixe' => $numero_telephone_fixe,
		'numero_telephone_portable' => $numero_telephone_portable,
		'adresse_mail' => $adresse_mail,
		'mot_de_passe' => $mot_de_passe
		);
		$resultat = $this->db->execute($query, $tab);
		return $resultat;
	}

	public function connectUtilisateur($adresse_mail, $mot_de_passe) {
		$query = 'SELECT * FROM clients WHERE adresse_mail = "'.$adresse_mail.'" AND mot_de_passe = "'.$mot_de_passe.'";';
		var_dump($query);
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function contact() {
	$query ="SELECT * FROM articles;";
	$resultat = $this->db->get($query);
	return $resultat;
	}
}
?>