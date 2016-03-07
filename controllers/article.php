<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/models/class_article.php');
class Controller_Article {
	/*
	* Fonction permettant de lister les articles
	*/
	public function listeArticle() {
		$article = new Model_Article();
		$listeArticle =$article->listeArticle();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/liste.php');
	}

	public function listeMod() {
		$article = new Model_Article();
		$listeMod =$article->listeMod();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/mod.php');
	}

	public function listeArticle01() {
		$article = new Model_Article();
		$listeArticle01 =$article->listeArticle01();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/cigamod.php');
	}

	public function listeEliquide() {
		$article = new Model_Article();
		$listeEliquide =$article->listeEliquide();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/eliquide.php');
	}

	public function listeAccessoire() {
		$article = new Model_Article();
		$listeAccessoire =$article->listeAccessoire();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/chargclear.php');
	}

	public function listeCigarette() {
		$article = new Model_Article();
		$listeCigarette =$article->listeCigarette();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/cigarette.php');
	}

	public function listeChargeur() {
		$article = new Model_Article();
		$listeChargeur =$article->listeChargeur();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/chargeur.php');
	}

	public function listeClearomiseur() {
		$article = new Model_Article();
		$listeClearomiseur =$article->listeClearomiseur();
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/clearomiseur.php');
	}

	public function viewArticle($id) {
		$article = new Model_Article();
		$articleDetails =$article->loadArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT'].'/IMIE/boutique/views/article/viewsarticle.php');
	}
}
?>