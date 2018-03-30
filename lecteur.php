<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Lecteur</title>

	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Grid/vendors/bootsrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/selectPlaylists.css">
</head>

<body>


	<?php include('header_lilt.php');
		if (isset($_POST['tag'])){
			$tag = $_POST["tag"];
		} else {
			$tag = "No tag";
		}
	?>
	<div class="container gallery-container">


	<h1>#PLAYLISTS</h1>

	<p class="page-description text-center"> Your favourite playlists just right there ! </p>

	<div class="searchbar">
		<form class="searchbar" action="search.php" method="post">
			<input type="text" name="search" id="search-bar" required>
			<input type="submit" class="button" value="Search !"></input>
		</form>
	</div>

</div>


	<div class="song select-tags">
			<form method="POST">
				<div class="inner-select">
					<SELECT name="tag" size="1" id="selectOptions">
						<option disabled>Playlists</option>
						<option >Playlists</option>
		        <option >Pop</option>
		        <!-- <option >Best new hits</option>
		        <option>The best of Pharrel</option>
		        <option >Sad Songs</option> -->
		        <option>Rap</option>
		        <!-- <option >Future hits</option>
		        <option >Party Songs</option>
		        <option >Top USA</option>
		        <option >Roadtrip</option>
		        <option >Top World</option> -->
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
									echo "<div class='artist-name artist-name-" . $i . "'> " . $lesartistes[0] -> nomArtiste . "</div>";
									echo "<div class='mp3-name mp3-name-" . $i . "''>
																<audio controls='controls' preload='metadata'>
															  <source src=\" ". $leschansons[$i] -> fichierMp3 . "\" type='audio/mp3' />
															  Votre navigateur n'est pas compatible
																</audio>
												</div>

												<input id='optionSong' type=image src='Images/Icon/mode-circular-button.png' alt='optionSong' width='40px'><!-- Permet d\'ouvrir le menu-->

												<!-- Le menu -->
												<div id='myModal' class='modal'>

													<!-- Contenu Menu -->
													<div class='modal-content'>

														<div class='modal-header'>
															<span class='close'>&times;</span>
															<h2>Options</h2>
														</div>
														<div class='modal-body'>
															<p><img id='coeurVide' src='Images/Icon/coeurVide.png' alt='coeurVide'>Ajouter aux favoris</p>
															<p>Ajouter à la playlist</p>
														</div>
														<div class='modal-footer'>
															<h3></h3>
														</div>

													</div>

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

	?>



	<script>
		// ------- Menu Option Composition -------- //

		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("optionSong");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
	<?php
	include('footer_lilt.php');
	?>

</body>
</html>
