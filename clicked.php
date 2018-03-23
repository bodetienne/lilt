		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Song-upload</title>

		<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Grid/vendors/bootsrap/css/bootstrap-grid.css">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>

		<?php
		session_start();
		include("header.php");
		$connexionStr=new PDO("mysql:host=localhost;dbname=lilt;charset=utf8",'root','');
		$nom = $connexionStr->query("SELECT * FROM utilisateur WHERE idUtilisateur=" . $_SESSION['id']);
		while ($donnees = $nom ->fetch()){
		?>

	<!--	CONTENTS 	-->

		<?php
			require 'PDO/includes/pdo.php';

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


			$idUser = $_SESSION['id'];
		/* requette permettant d'insérer les infos dans la tab artiste*/

			try {
				$nomArtiste = $_POST['artist'];
				$idArtiste = "SELECT `idArtiste` FROM `artiste` WHERE `nomArtiste`=\"$nomArtiste\" AND `idUtilisateur`='$idUser'"; //vérifie si l'artiste rentré existe

				$stmt = $connexion-> prepare($idArtiste);
				$stmt -> execute();
				$temp = $stmt-> fetch();

				if ($temp != false) {
				//si l'artiste existe, il ne se passe rien

				} else {
					//si il n'existe pas, on créer l'artiste
					$createArtist = "INSERT INTO artiste (nomArtiste, idUtilisateur) VALUES ('" .  $nomArtiste .  "', '" . $idUser . "')";
					$stmt = $connexion-> prepare($createArtist);
					$stmt -> execute();
					$temp = $stmt-> fetch();
					if($temp != false) {
						echo "vous êtes désormais un artiste";
					} else {
						echo "Il y a une erreur au moment de la création de votre identifiant d'artiste";
					}
				}

				/* requette permettant de recup l'id artiste*/
				$recupIdArtiste = "SELECT `idArtiste` FROM `artiste` WHERE `nomArtiste`= '$nomArtiste' ";
				$stmt = $connexion-> prepare($recupIdArtiste);
				$stmt -> execute();
				$temp = $stmt-> fetch();

				if ($temp != false){
					echo "On a l'id de l'artiste";
				} else {
					echo "Nous n'avons pas pu récupérer l'id de l'artiste";
				}

				/* requette permettant d'insérer les valeurs écrites et recup dans la tab chanson */
				$cheminUpload = "lecteur/music/" . $_POST["mp3-file"];
				$insertInto = "INSERT INTO chanson (nomChanson, tag, fichierMp3, idArtiste)
				VALUES ('" .  $_POST['name'] .  "', '" . $_POST['tag'] ."' , '" . $cheminUpload ."' , '" . $idArtiste . "')";
				$stmt = $connexion-> prepare($insertInto);
				$stmt -> execute();
				$temp = $stmt-> fetch();

				if ($temp != false){
					echo "L'import a réussi";
				} else {
					echo "Echec de l'import.";
				}
			} catch(Exception $e) {
				echo '<p> Erreur n° : ' . $e->getCode() . ' : ' . $e->getMessage(). '</p>';
				echo '<p>Dans '. $e->getFile(). '('. $e->getLine() .')';
				echo "<pre>";
				var_dump ($e -> getTrace());
				echo "</pre>";
			}
		}

		?>
