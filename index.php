<?php
	session_start();
	$controller ="";
	$action="";


if(!empty($_GET["c"]) && !empty($_GET["a"])){
	$controller = $_GET['c'];
 	$action = $_GET['a'];
 }

 if ($controller =="article" && $action =="list") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
 	$controller_article = new Controller_Article();
	$controller_article->listeArticle();
	
 } elseif ($controller == "article" && $action == "view") {
	if(empty($_GET['id'])) {
 		echo "<p> Il manque l'identifiant du produit </p>";
 	} else {
 		$idProduit = intval($_GET['id']);
 		require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
 		$controller_article->viewArticle($idProduit);
 	}

 } elseif ($controller == "utilisateur" && $action == "insert") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/utilisateur.php");
	 	$controller_utilisateur = new Controller_Utilisateur();
		$controller_utilisateur->addUtilisateur();

 } elseif ($controller == "utilisateur" && $action == "connect") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/utilisateur.php");
	 	$controller_utilisateur = new Controller_Utilisateur();
		$controller_utilisateur->connectUtilisateur();

 } elseif ($controller == "utilisateur" && $action == "contact") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/utilisateur.php");
	 	$controller_utilisateur = new Controller_Utilisateur();
		$controller_utilisateur->contact();

 } elseif ($controller == "article" && $action == "cigamod") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
	 	$controller_article = new Controller_Article();
		$controller_article->listeArticle01();

 } elseif ($controller == "article" && $action == "eliquide") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
	 	$controller_article = new Controller_Article();
		$controller_article->listeEliquide();

 } elseif ($controller == "article" && $action == "accessoire") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
	 	$controller_article = new Controller_Article();
		$controller_article->listeAccessoire();

 } elseif ($controller == "article" && $action == "cigarette") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
	 	$controller_article = new Controller_Article();
		$controller_article->listeCigarette();

 }elseif ($controller == "article" && $action == "mod") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
	 	$controller_article = new Controller_Article();
		$controller_article->listeMod();

 } elseif ($controller == "article" && $action == "chargeur") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
	 	$controller_article = new Controller_Article();
		$controller_article->listeChargeur();

 } elseif ($controller == "article" && $action == "clearomiseur") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/controllers/article.php");
	 	$controller_article = new Controller_Article();
		$controller_article->listeClearomiseur();

 } elseif ($controller == "" && $action == "") {
 	require($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/welcome.php");
}
?>