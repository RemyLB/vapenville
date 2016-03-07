<?php
require($_SERVER['DOCUMENT_ROOT']."/IMIE/boutique/library/db.php");
class Model_Article {
	private $db;

	public function __construct() {
		$this->db = DB::getInstance();
	}
	
	public function listeArticle() {
		$query ="SELECT * FROM articles;";
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listeMod() {
		$query =("SELECT * FROM articles WHERE id ='3'");
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listeArticle01() {
		$query ="SELECT * FROM articles;";
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listeEliquide() {
		$query ="SELECT * FROM articles WHERE id = '1'";
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listeAccessoire() {
		$query ="SELECT * FROM articles;";
		$resultat = $this->db->get($query);
		return $resultat;
	}
	public function listeCigarette() {
		$query =("SELECT * FROM articles WHERE id = '2'");
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listeChargeur() {
		$query =("SELECT * FROM articles WHERE id ='4'");
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listeClearomiseur() {
		$query =("SELECT * FROM articles WHERE id ='5'");
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function welcome() {
	}
	
	public function loadArticle($id){
		return "Chargement de l'article " .$id;
	}
}
?>