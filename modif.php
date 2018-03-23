<?php
		// Connexion à la base de données
session_start();
		     try
		    {
		        $bdd = new PDO('mysql:host=localhost;dbname=lilt;charset=utf8', 'root', '');
		        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		    }
		    catch(Exception $e)
		    {
		            die('Erreur : '.$e->getMessage());
		    }

				$hashpass=$_POST['mdp_utilisateur'] /*. $salt*/;
				$hashpass=sha1($hashpass);

		    $req = $bdd->prepare('UPDATE utilisateur SET nom_utilisateur = :nom_utilisateur, email_utilisateur = :email_utilisateur, mdp_utilisateur = :mdp_utilisateur WHERE idUtilisateur=' . $_SESSION['id']);

		    $req->bindValue('nom_utilisateur',$_POST['nom_utilisateur']);
				$req->bindValue('email_utilisateur',$_POST['email_utilisateur']);
		    $req->bindValue('mdp_utilisateur',$hashpass);


		    if (!$req->execute()) {
		        echo 'Erreur';
		    } else {
						header("location: ../index_profile.php");
		        //echo 'Modifi&eacute;';
		    }

?>
