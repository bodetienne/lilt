<link rel="stylesheet" href="style/style.css">


<!-- HEADER	-->	
	
	<?php include('header.php');	?>
	
<!--	CONTENTS 	-->	

<?php
	$link = mysqli_connect ( "localhost", "root", "", "lilt"); //accès à la base de donnée

	echo '
	<div class="big">
		<div class="elements">
			<p class="element"> Your song <strong>' . $_POST["name"] . '</strong> has been upload with success !</p>
			<p class="element"> You can listen it in the playlist #' . $_POST["tag"] . '</p>
		</div>
		<div class="proud-picture">
			<p>'. $_POST["name"] .'</p>
		</div>
	</div>
	';
	


	/* requette permettant  de recup l'id utilisateur*/
	$recupId = "SELECT `idUtilisateur` FROM `utilisateur` WHERE `nom_utilisateur`= '$user'";
	if ($stmt = mysqli_prepare($link, $recupId)) {
		mysqli_stmt_execute($stmt);
		
		mysqli_stmt_bind_result($stmt, $idUtilisateur);
		while(mysqli_stmt_fetch($stmt)){
			echo "on a l'id de l'user <br>";
/*			echo $idUtilisateur;*/
		}
	} else {
		echo "pas d'id user dans " . $recupId . "<br>" . mysqli_error($link);
	}
	
	/* requette permettant d'insérer les infos dans la tab artiste*/
	$nomArtiste = $_POST['artist'];
	$verif = "SELECT `idArtiste` FROM `artiste` WHERE `nomArtiste`='$nomArtiste' AND `idUtilisateur`='$idUtilisateur'"; //vérifie si l'artiste rentré existe
	echo $verif;
	if ($stmt = mysqli_prepare($link, $verif)) {
		mysqli_stmt_execute($stmt);
		
		$tabVerif = [];
		mysqli_stmt_bind_result($stmt, $idArtiste);
			while(mysqli_stmt_fetch($stmt)){
			$tabVerif[] = $idArtiste;
		}
		print_r($tabVerif);
		//si l'artiste existe, il ne se passe rien
		if (sizeof($tabVerif) > 0){	

		//si il n'existe pas, on créer la chanson
		} else {
			$sql = "INSERT INTO artiste (nomArtiste, idUtilisateur) VALUES ('" .  $nomArtiste .  "', '" . $idUtilisateur . "')";
			if (mysqli_query($link, $sql)) {

			echo "Vous êtes désormais un artiste";
			} else {
				echo "Il y a une erreur au moment de la création de votre identifiant d'artiste dans" . $sql . "<br>" . mysqli_error($link);
			}

		}
	}
	
	
	
	
	/* requette permettant de recup l'id artiste*/
	$recupIdArtiste = "SELECT `idArtiste` FROM `artiste` WHERE `nomArtiste`= '$nomArtiste' ";
	if ($stmt = mysqli_prepare($link, $recupIdArtiste)) {
		mysqli_stmt_execute($stmt);
		
		mysqli_stmt_bind_result($stmt, $idArtiste);
		while(mysqli_stmt_fetch($stmt)){
			echo "on a l'id de l'artiste <br>";
/*
			echo $idArtiste;
*/
		}
	} else {
		echo "pas d'id artiste " . $recupIdArtiste . "<br>" . mysqli_error($link);
	}

	/* requette permettant d'insérer les valeurs écrites et recup dans la tab chanson */
	$sql = "INSERT INTO chanson (nomChanson, dureeChanson, tag, idArtiste)
	VALUES ('" .  $_POST['name'] .  "', '" . $_POST['duree'] ."', '" . $_POST['tag'] ."' , '" . $idArtiste . "')"; 

	if (mysqli_query($link, $sql)) {
		echo "La chanson est importée !! ";
	} else {
		echo "L'import de votre chanson n'a pas pu être réalisé. Veuillez réessayer. " . $sql . "<br>" . mysqli_error($link);
	}

 
		
		
		
		
		
		
?>