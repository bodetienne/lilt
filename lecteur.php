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
			<div class="list">';


						$tag = $_POST["tag"];
					try {

							$query_select = "SELECT * FROM `chanson` WHERE `tag`='$tag'";
							$stmt = $connexion->prepare($query_select);
							$stmt -> execute();

							$leschansons = Array();
							$temp  = $stmt->fetch();

							while($temp != false){
									array_push($leschansons, $temp);
									$temp  = $stmt->fetch();
							}

							//faire en sorte que les chansons soient accessibles à tout le monde
							


							for ($i=0; $i<sizeof($leschansons); $i++){

								//récupérer nom artiste à partir de l'id
								$query_artiste = "SELECT * FROM artiste WHERE idArtiste= '" . $leschansons[$i] -> idArtiste ."'";
								$stmt = $connexion -> prepare($query_artiste);
								$stmt -> execute();

								$lesartistes = Array();
								$tempo = $stmt -> fetch();
								array_push($lesartistes, $tempo);


								// echo "Je rentre dans la boucle et je suis à la ligne" . $i;
								echo "<div class='big-player'>";
									echo "<div class='song-name song-name-" . $i . "''>" . $leschansons[$i] -> nomChanson . "</div>";
									echo "<div class='artist-name artist-name-" . $i . "''>" . $lesartistes[0] -> nomArtiste . "</div>";
									echo "<div class='mp3-name mp3-name-" . $i . "''>
																<audio controls='controls' preload='metadata'>
															  <source src='". $leschansons[$i] -> fichierMp3 . "' type='audio/mp3' />
															  Votre navigateur n'est pas compatible
																</audio>
												</div>";
												//mp3 est le seul format à pouvoir être lu sur IE, chrome, Firefox, Safari et Opera
								echo "</div>";
							}


					} catch(Exception $e) {
						echo '<p> Erreur n° : ' . $e->getCode() . ' : ' . $e->getMessage(). '</p>';
						echo '<p>Dans '. $e->getFile(). '('. $e->getLine() .')';
						echo "<pre>";
						var_dump ($e -> getTrace());
						echo "</pre>";
					}

				echo '
			</div>
		</div>
	</div>';
	?>

</body>
</html>
