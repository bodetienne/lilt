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


	<?php include('header_lilt.php');
		if (isset($_POST['tag'])){
			$tag = $_POST["tag"];
		} else {
			$tag = "No tag";
		}
	?>


	<div class="song select-tags">
			<form method="POST">
				<div class="inner-select">
					<SELECT name="tag" size="1" >
						<option >Playlists</option>
		        <option >Pop</option>
		        <option >Best new hits</option>
		        <option>The best of Pharrel</option>
		        <option >Sad Songs</option>
		        <option>Rap</option>
		        <option >Future hits</option>
		        <option >Party Songs</option>
		        <option >Top USA</option>
		        <option >Roadtrip</option>
		        <option >Top World</option>
		        <option >Rock</option>
		        <option >Soul</option>
		        <option >Reggae</option>
		        <option >No tag</option>
					</SELECT>
					<button type="submit" class="submit-playlist"> Listen Music </button>
				</div>
			</form>
	</div>


		<?php require 'PDO/includes/pdo.php';

	echo'
	<div class="grand-container">
		<div class="title-container">
		<h2 class="title">' . $tag . '</h2>
		</div>';
		echo '<div class="inner">';



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
								$temp = $stmt -> fetch();
								array_push($lesartistes, $temp);


								// echo "Je rentre dans la boucle et je suis à la ligne" . $i;
								echo "<div class='big-player'>";
									echo "<div class='song-name song-name-" . $i . "'>" . $leschansons[$i] -> nomChanson . "</div>";
									echo "<div class='artist-name artist-name-" . $i . "> " . $lesartistes[0] -> nomArtiste . "</div>";
									echo "<div class='mp3-name mp3-name-" . $i . "''>
																<audio controls='controls' preload='metadata'>
															  <source src=\" ". $leschansons[$i] -> fichierMp3 . "\" type='audio/mp3' />
															  Votre navigateur n'est pas compatible
																</audio>
												</div>
										</div>";
												//mp3 est le seul format à pouvoir être lu sur IE, chrome, Firefox, Safari et Opera
								// echo "</div>";
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
	include('footer_lilt.php');
	?>

</body>
</html>
