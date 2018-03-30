<?php
		// Connexion à la base de données
session_start();

require 'PDO/includes/pdo.php';
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



			$req = $bdd->prepare('UPDATE utilisateur SET facebook = :facebook WHERE idUtilisateur=' . $_SESSION['id'].'.');

			if(!empty($_POST['facebook'])){
				$query = 'UPDATE utilisateur SET facebook = "' . $_POST['facebook'] . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
				$req = $bdd->prepare($query);
	echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
				}
			}



						$req = $bdd->prepare('UPDATE utilisateur SET instagram = :instagram WHERE idUtilisateur=' . $_SESSION['id'].'.');

						if(!empty($_POST['instagram'])){
							$query = 'UPDATE utilisateur SET instagram = "' . $_POST['instagram'] . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
							$req = $bdd->prepare($query);
				echo('Query = ' . $query . "<br>");
							if (!$req->execute()) {
								echo 'Erreur';
							}
						}



			$req = $bdd->prepare('UPDATE utilisateur SET twitter = :twitter WHERE idUtilisateur=' . $_SESSION['id'].'.');

			if(!empty($_POST['twitter'])){
				$query = 'UPDATE utilisateur SET twitter = "' . $_POST['twitter'] . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
				$req = $bdd->prepare($query);
	echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
				}
			}


//  On met dans un fichier image profil //


// print_r($_FILES);


if (isset($_FILES['avatar'])) {
	echo $_FILES['avatar'];
		 print_r($_FILES);
		echo "Get file";
	 if ($_FILES['avatar']['error'] == UPLOAD_ERR_OK) {
			 $tmp_name = $_FILES["avatar"]["tmp_name"];
			 // basename() peut empêcher les attaques "filesystem traversal";
			 // une autre validation/nettoyage du nom de fichier peux être appropriée
			 $name = basename($_FILES["avatar"]["name"]);
			 move_uploaded_file($tmp_name, "Images/image-profil/$name");
			 $nameLink= "Images/image-profil/" . $name;
	 } else {

	 }
}


// -------------------------------//



			$req = $bdd->prepare('UPDATE utilisateur SET avatar = :avatar WHERE idUtilisateur=' . $_SESSION['id'].'.');

			if(!empty($_POST['avatar'])){
				$query = 'UPDATE utilisateur SET avatar = "' . $nameLink . '" WHERE idUtilisateur="' . $_SESSION['id'] .'"';
				$req = $bdd->prepare($query);
	//echo('Query = ' . $query . "<br>");
				if (!$req->execute()) {
					echo 'Erreur';
				}
			}


}


						//header("location: profil.php");
		        //echo 'Modifi&eacute;';

			$nom->closeCursor();

?>
