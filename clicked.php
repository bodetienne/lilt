		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Song-upload</title>

		<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Grid/vendors/bootsrap/css/bootstrap-grid.css">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>

		<?php
		session_start();
		include("header_lilt.php");
		$connexionStr=new PDO("mysql:host=localhost;dbname=lilt;charset=utf8",'root','');
		if (!isset($_SESSION['id'])){
			echo "You have to be connected to check import a song";
		} else {
			$idUser = $_SESSION['id'];
		$nom = $connexionStr->query("SELECT * FROM utilisateur WHERE idUtilisateur='" . $_SESSION['id'] . "'");
		while ($donnees = $nom ->fetch()){
		?>

	<!--	CONTENTS 	-->

		<?php

			require 'PDO/includes/pdo.php';

			if (empty($_POST['name']) || empty($_POST['artist']) || empty($_POST['tag']) ){
				echo "<div class='error-container'>";
					echo "<div class=error-empty>";
						echo "<p class='error-message'>Please fill all the informations to upload your song</p>";
						echo "<div class='go-back'> <a href='upload-click.php'> Go back </a></div>";
					echo "</div>";
				echo "</div>";
			}else {

				echo '
				<div class="big">
					<div class="elements">
						<p class="element"> Your song <strong>' . $_POST["name"] . '</strong> has been upload with success !</p>
						<p class="element"> You can listen it in the playlist #' . $_POST["tag"] . '</p>
					<div class="proud-picture">
						<p>'. $_POST["name"] .'</p>
					</div>
				</div>
				';


					//
					// try {
						/* requette permettant d'insérer les infos dans la tab artiste*/
						$idUser = $_SESSION['id'];
						$nomArtiste = $_POST['artist'];
						$idArtiste = "SELECT `idArtiste` FROM `artiste` WHERE `nomArtiste`=\"$nomArtiste\" AND `idUtilisateur`='$idUser'"; //vérifie si l'artiste rentré existe
						$idArtistePlagiat = "SELECT `idArtiste` FROM `artiste` WHERE `nomArtiste`=\"$nomArtiste\" AND `idUtilisateur`!='$idUser'"; //vérifie si l'artiste rentré existe

						$stmt = $connexion-> prepare($idArtiste);
						$stmt -> execute();
						$temp = $stmt-> fetch();

						// $stmt1 = $connexion-> prepare($idArtistePlagiat);
						// $stmt -> execute();
						// $temp1 = $stmt-> fetch();
						// var_dump($temp);
						// echo('<br> Id artiste = ' . $idArtiste . "<br/>");
						if ($temp !== false) {
						//si l'artiste existe, il ne se passe rien
							$idArtiste = $temp->idArtiste;

						// } else if($temp1 != false) {
						// 	echo "Please choose another artist name, this one is already used";
						// 	var_dump($temp1);
						} else {
							//si il n'existe pas, on créer l'artiste


							$createArtist = "INSERT INTO artiste (nomArtiste, idUtilisateur) VALUES (\"" .  $nomArtiste .  "\",  " . $idUser . ")";
							$stmt = $connexion-> prepare($createArtist);
							// echo $createArtist;
							$stmt -> execute();
						// 	if($temp != false) {
						// 		//artiste créer
						// 	} else {
						// 		//artiste nin créer
						// 	}
						// }

						/* requette permettant de recup l'id artiste*/
						$idArtiste = "SELECT `idArtiste` FROM `artiste` WHERE `nomArtiste`= \"$nomArtiste\" AND `idUtilisateur`='$idUser'";
						$stmt = $connexion-> prepare($idArtiste);
						$stmt -> execute();
						$temp = $stmt-> fetch();

						if ($temp != false){
							// echo "On a l'id de l'artiste";
							$idArtiste = $temp->idArtiste;
						} else{
							// echo "Nous n'avons pas pu récupérer l'id de l'artiste";
						}

						// print_r($_FILES);
						if (isset($_FILES['mp3-file'])) {
						    // print_r($_FILES);
								//echo "salut";
						   if ($_FILES['mp3-file']['error'] == UPLOAD_ERR_OK) {
						       $tmp_name = $_FILES["mp3-file"]["tmp_name"];
						       // basename() peut empêcher les attaques "filesystem traversal";
						       // une autre validation/néttoyage du nom de fichier peux être appropriée
						       $name = basename($_FILES["mp3-file"]["name"]);
						       move_uploaded_file($tmp_name, "lecteur/music/$name");
									 $nameLink= "lecteur/music/" . $name;
						   } else {

							 }
						}

						echo $name;
						/* requette permettant d'insérer les valeurs écrites et recup dans la tab chanson */
						// $cheminUpload = "lecteur/music/" . $name;
						// echo "Chemin d'upload<br/>";
						// echo $cheminUpload;
						$insertInto = "INSERT INTO chanson (nomChanson, tag, fichierMp3, idArtiste)
						VALUES (\"" .  $_POST['name'] .  "\", \"" . $_POST['tag'] ."\" , \"" . $nameLink ."\" , '" . $idArtiste . "')";
						// echo $insertInto;
						// echo "InserInto query<br/>";
						// echo $insertInto . "<br/>";
						$stmt = $connexion-> prepare($insertInto);
						$stmt -> execute();
						// $temp = $stmt-> fetch();
						//
						// if ($temp != false){
						// 	echo "L'import a réussi";
						// } else {
						// 	echo "Echec de l'import.";
						// }
					}
				// }
				// 	catch(Exception $e) {
				// 	echo '<p> Erreur n° : ' . $e->getCode() . ' : ' . $e->getMessage(). '</p>';
				// 	echo '<p>Dans '. $e->getFile(). '('. $e->getLine() .')';
				// 	echo "<pre>";
				// 	var_dump ($e -> getTrace());
				// 	echo "</pre>";
				// }
			}
		}
	}

		include('footer_lilt.php');

		?>
