<?php
		// Connexion à la base de données
session_start();
$connexionStr=new PDO("mysql:host=localhost;dbname=lilt;charset=utf8",'root','');
$nom = $connexionStr->query("SELECT * FROM utilisateur WHERE idUtilisateur=" . $_SESSION['id']);
while ($donnees = $nom ->fetch()){
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

			$req = $bdd->prepare('UPDATE utilisateur SET nom_utilisateur = :nom_utilisateur WHERE idUtilisateur=' . $_SESSION['id'].'.');

				if(!empty($_POST['nom_utilisateur'])){
					$query = 'UPDATE utilisateur SET nom_utilisateur = "' . $_POST['nom_utilisateur'] . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
					$req = $bdd->prepare($query);
					echo('Query = ' . $query . "<br>");
					if (!$req->execute()) {
						echo 'Erreur';
					}
				}



			$req = $bdd->prepare('UPDATE utilisateur SET email_utilisateur = :email_utilisateur WHERE idUtilisateur=' . $_SESSION['id'].'.');

				if(!empty($_POST['email_utilisateur'])){
					$query = 'UPDATE utilisateur SET email_utilisateur = "' . $_POST['email_utilisateur'] . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
					$req = $bdd->prepare($query);
						echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
					}
				}


			$req = $bdd->prepare('UPDATE utilisateur SET mdp_utilisateur = :mdp_utilisateur WHERE idUtilisateur=' . $_SESSION['id'].'.');

			if(!empty($_POST['mdp_utilisateur'])){
				$query = 'UPDATE utilisateur SET mdp_utilisateur = "' . $hashpass . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
				$req = $bdd->prepare($query);
	echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
				}
			}


			$req = $bdd->prepare('UPDATE utilisateur SET citation = :citation WHERE idUtilisateur=' . $_SESSION['id'].'.');

			if(!empty($_POST['citation'])){
				$query = 'UPDATE utilisateur SET citation = "' . $_POST['citation'] . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
				$req = $bdd->prepare($query);
	echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
				}
			}

			$req = $bdd->prepare('UPDATE utilisateur SET age = :age WHERE idUtilisateur=' . $_SESSION['id'].'.');

			if(!empty($_POST['age'])){
				$query = 'UPDATE utilisateur SET age = "' . $_POST['age'] . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
				$req = $bdd->prepare($query);
	echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
				}
			}

			$req = $bdd->prepare('UPDATE utilisateur SET description = :description WHERE idUtilisateur=' . $_SESSION['id'].'.');

			if(!empty($_POST['description'])){
				$query = 'UPDATE utilisateur SET description = "' . $_POST['description']. '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
				$req = $bdd->prepare($query);
	echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
				}
			}


}



						header("location: index_profile.php");
		        //echo 'Modifi&eacute;';

			$nom->closeCursor();

?>
