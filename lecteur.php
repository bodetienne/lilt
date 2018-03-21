<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Lecteur</title>
	
	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Grid/vendors/bootsrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="style/style.css">
</head>

<body>

		
	<?php include('header.php'); ?>
	

	<div class="song select-tags">
		<form method="POST">
			<SELECT name="tag" size="1" class="select-tags">
				<OPTION selected disabled>Select your playlist
				<OPTION>Rock
				<OPTION>Rap
				<OPTION>Soul
				<OPTION>Pop
				<OPTION>Reggae
				<OPTION>No tag
			</SELECT>
			<button type="submit" class="submit-playlist"> Listen Music </button>
			</form>
	</div>
	
			
<?php 

	require 'PDO/includes/pdo.php';

	echo'
	<div class="grand-container">
		<h2 class="title">' . $_POST["tag"] . '</h2>';
		echo '<div class="inner">
			<div class="list">
				<ul id="playlist">';
						
					
						$tag = $_POST["tag"];
					try {
						/*if (!isset($user)){
							echo "Vous devez être connecté pour voir les playlists";
						
						} else {*/
							
							/*$recupId = "SELECT `idUtilisateur` FROM `utilisateur` WHERE `nom_utilisateur`= '$name'";
							$stmt = $connexion -> prepare($recupId);
							$stmt -> execute();*/
							
							
							
							$query_select = "SELECT * FROM chanson WHERE tag='$tag'";
							$stmt = $connexion->prepare($query_select);
							$stmt -> execute();	
							
							while($chanson = $stmt -> fetch()) {
								echo "<div class='lecteur'>  <span>" . $chanson -> nomChanson . "</span>";
								$idArtiste = $chanson -> idArtiste;

								$query_artiste = "SELECT * FROM artiste WHERE idArtiste= '$idArtiste'";
								$stmt = $connexion -> prepare($query_artiste);
								$stmt -> execute();

								while($artiste = $stmt -> fetch()) {
									echo "<span>". $artiste -> nomArtiste ."</span>
									<audio controls='controls'>
										<source src=" . $chanson -> fichierMp3 . "type ='audio/mp3'
									</audio>";
								}
							}
							echo " </div>";
					
					/*}*/
						
					} catch(Exception $e) {
						echo '<p> Erreur n° : ' . $e->getCode() . ' : ' . $e->getMessage(). '</p>';
						echo '<p>Dans '. $e->getFile(). '('. $e->getLine() .')';
						echo "<pre>";
						var_dump ($e -> getTrace());
						echo "</pre>";
					}				
							
				echo '</ul>
			</div>
		</div>
	</div>';
	?>

</body>
</html>