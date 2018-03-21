<?php
		// Connexion à la base de données
session_start();
		require_once "php/connexionBdd.php";
		
		
		// récupération des variables POST: 
		$ID=isset($_POST['idUtilisateur'])?$_POST['idUtilisateur']:'';
		$nom=isset($_POST['nom_utilisateur'])?$_POST['nom_utilisateur']:'';
		$email=isset($_POST['email'])?$_POST['email']:'';
		$mdp=isset($_POST['mot_de_passe'])?$_POST['mot_de_passe']:'';
		
		$date_du_jour = date ("d-m-Y");
		$heure_courante = date ("H:i");
		echo 'Nous sommes le : ';
		echo $date_du_jour;
		echo ' Et il est : ';
		echo $heure_courante;

		//Requete modification 
		$sql = "UPDATE utilisateur SET nom_utilisateur='?', email_utilisateur='?', mdp_utilisateur='?' WHERE utilisateur.idUtilisateur='?'";
		$req = $connexion->prepare($sql);
		$req->execute (array('idUtilisateur' => $ID, 'nom_utilisateur' => $nom, 'email' => $email, 'mot_de_passe' => $mdp));

		print_r($_SESSION)
?>	