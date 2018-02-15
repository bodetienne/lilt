<?php
	
	$hostname = "localhost";
	$dbname = "lilt";
	$username = "root";
	$userpass = "";

	$connexionStr = "mysql:host=$hostname;dbname=$dbname;charset=utf8";
	
	try {
		//params : chaines de connexion, idf, mdp
		$connexion = new PDO($connexionStr, $username, $userpass);
		//s'il y a un problème, il est géré sous forme d'exception
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//fonctionnement en UTF8
		$connexion->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
		//recuperation automatique sous forme d'objet 
		$connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	} catch(Exception $e) {
		echo '<p> Erreur n° : ' . $e->getCode() . ' : ' . $e->getMessage(). '</p>';
		echo '<p>Dans '. $e->getFile(). '('. $e->getLine() .')';
		echo "<pre>";
		var_dump ($e -> getTrace());
		echo "</pre>";
	}
?>