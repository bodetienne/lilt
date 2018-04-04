<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Lecteur</title>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Grid/vendors/bootsrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="style/style.css">

	<link rel="stylesheet" href="style/selectPlaylists.css">
</head>

<body>


	<?php include('header_lilt.php');
	include('sql-Identification.php');

		session_start();
			if (isset($_POST['tag'])){
				$tag = $_POST["tag"];
			} else {
				if(isset($_GET['tag'])){
					$tag = $_GET['tag'];
				} else {
					$tag = "No tag";
				}
			}
	if (!isset($_SESSION['id'])){
		echo "You have to be connected to listen music";
	} else {
		$idUser = $_SESSION['id'];

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
						<option>Playlists</option>
		        <option <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "Pop"){echo('selected');}} ?>>Pop</option>
		        <!-- <option >Best new hits</option> -->
		        <!-- <option>The best of Pharrel</option> -->
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "SadSongs"){echo('selected');}} ?>>Sad Songs</option>
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "Rap"){echo('selected');}} ?> >Rap</option>
		        <!-- <option >Future hits</option> -->
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "PartySong"){echo('selected');}} ?> >Party Songs</option>
		        <!-- <option >Top USA</option> -->
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "Roadtrip"){echo('selected');}} ?>>Roadtrip</option>
		        <!-- <option >Top World</option> -->
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "Rock"){echo('selected');}} ?> >Rock</option>
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "Soul"){echo('selected');}} ?> >Soul</option>
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "Reggae"){echo('selected');}} ?> >Reggae</option>
		        <option  <?php if(!empty($_GET['tag'])){if($_GET['tag'] == "NoTag"){echo('selected');}} ?> >No tag</option>
					</SELECT>
					<button type="submit" class="submit-playlist"> Listen Music </button>
				</div>
			</form>
	</div>


		<?php require 'PDO/includes/pdo.php';

		/* Fonctions Teo */

		/**
		* By Teo
		* Obtient le nombre de like d'une chanson
		*
		* @param    int  $song la chanson demandée
		* @return      int le nombre de likes
		*
		*/
		function getNumberLikes($song, $connexion){
			$query = "SELECT jaime FROM chanson WHERE idChanson = " . $song;
			$stmt = $connexion->prepare($query);
			$stmt -> execute();

			$likes = $stmt->fetch();
			$likes = explode(",", $likes->jaime);
			return(sizeof($likes));
		}

		/**
		* By Teo
		* Obtient un tableau d'id utilisateurs
		*
		* @param    int  $song la chanson demandée
		* @return      array le nombre de likes
		*
		*/
		function getLikesIDs($song){

		}

		/**
		* By Teo
		* Check si l'utilisateur à déjà liké
		*
		* @param    int  $song la chanson demandée
		*		 	int  $user l'id de l'utilisateur courant
		*		 	PDOConnection $connection la connection PDO à la BDD
		* @return      boolean true si déjà liké
		*
		*/
		function userLiked($song, $user, $connection){
			$query = "SELECT jaime FROM chanson WHERE idChanson = " . $song;

			//echo('<br>// Exe userLiked with params song = (' . $song . ') || user = (' . $user . ') || query = ' . $query .' //<br>');

			$stmt = $connection->prepare($query);
			$stmt -> execute();


			$likes = $stmt->fetch();
			//var_dump($likes);
			$likes = explode(",", $likes->jaime);
			//echo('<br>Result query : <br>');
			//echo('<br><strong>L"user ' . $user . ' / ');
			//var_dump($likes);
			//echo('</strong><br/>');

			$output = false;

			foreach ($likes as $key => $element){
				if($element == $user){
					$output = true;
				}
			}

			return($output);
		}



		/**
		* Non fonctionnel
		* By Teo
		* Execute une query SQL et renvoi 1 seule résultat
		*
		* @param    query  $query la query SQL à executer
		*			PDOConnection $connection la connection PDO à la BDD
		* @return      	boolean false si aucun résultat
		*				strClass ou Array si résultat
		*
		*/
		function exeSQL($query, $connection){
			echo('<br>// Exe exeSQL with params query = (' . $query . ') || connection = (');
			var_dump($connection); echo(') //<br>');

			$stmt = $connection->prepare($query);
			$stmt -> execute();
			return($stmt->fetch);
		}

	echo'
	<div class="grand-container">
		<div class="title-container">
		<h2 class="title">' . $tag . '</h2>
		</div>';
		echo '<div class="inner" id="songs_inner">';



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

							/*echo("<br>Les chansons : ");
							var_dump($leschansons);*/

							//faire en sorte que les chansons soient accessibles à tout le monde



							for ($i=0; $i<sizeof($leschansons); $i++){

								//récupérer nom artiste à partir de l'id
								$query_artiste = "SELECT * FROM artiste WHERE idArtiste= '" . $leschansons[$i] -> idArtiste ."'";
								$stmt = $connexion -> prepare($query_artiste);
								$stmt -> execute();

								$lesartistes = Array();
								$temp = $stmt -> fetch();
								array_push($lesartistes, $temp);

								// echo('<br>query artiste : ' . $query_artiste);
								// echo('<br>"les artiste" : ');
								// var_dump($lesartistes);
								// echo('<br>"les artiste" index ' . $i . ' : ');
								// var_dump($lesartistes[$i]);
								// echo('<br>La chanson courante : ' . $leschansons[$i]->idChanson);
								// echo('<br>Connexion PDO : ');
								// var_dump($connexion);








								//Check song like
								$song_is_liked = userLiked($leschansons[$i]->idChanson, $_SESSION['id'], $connexion);
								$nbrlikes = getNumberLikes($leschansons[$i]->idChanson, $connexion);
								if($song_is_liked){
									$html_song_like = "<p><img id=\"like" . $i . "\" class=\"addFavorite likeheart\" src='Images/Icon/coeurPlein.png' alt='coeurPlein'>";
								} else {
									$html_song_like = "<p><img id=\"like" . $i . "\" class=\"addFavorite likeheart\" src='Images/Icon/coeurVide.png' alt='coeurVide'>";
								}



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
												" . $html_song_like . "
												<span id=\"song_number" . $i . "\" style=\" display: none;\">" . $leschansons[$i]->idChanson . "</span></p>
												 <p class=\"number\"></p>

												<!-- Permet d\'ouvrir le menu-->
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

		/* Teo */

		function sendQuery(query){
			console.log('Function sendQuery');
			console.log("query : " + query);

			//instance de l'objet
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange=function() {
			  if (this.readyState == 4 && this.status == 200) {
				  console.log("ShowMessage response = ");
				  console.log(this.responseText);
			  }
			};

			xhttp.open("GET",query , true);
			xhttp.send();
		}

		/* Teo */

		// Get the modal
		var nbrsong = (document.getElementById("songs_inner").childElementCount);
		console.log(nbrsong + ' songs');

		var ellikes = Array();

		for(var i = 0; i < nbrsong; i++){

			ellikes.push($("#like"+i));

			ellikes[i].click(function(){
				console.log("button like " + i);
				console.log(event.target);
				var me = event.target;

				var like = false;
				var query = "";
				var song = $(me).closest('p').find('span').text();
				var nbrlikes = $(me).closest('.big-player').find('.number > span');
				var countlikes = parseInt(nbrlikes.text());
				console.log(countlikes);
				var src = me.src;
				if(src.indexOf('coeurPlein') != -1){
					like = true;
				} else {
					like = false;
				}

				//Toggle
				console.log('Actual like ' + like);
				console.log('Actual song ' + song);
				if(like){
					console.log('Toggle unlike');
					query = "function.php?action=unlike&song=" + song;
					me.src = 'Images/Icon/coeurVide.png';
					me.innerHTML = "Ajouter aux favoris";

					nbrlikes.html("" + countlikes--);
					console.log(countlikes);
				} else {
					console.log('Toggle like');
					query = "function.php?action=like&song=" + song;
					me.src = 'Images/Icon/coeurPlein.png';
					me.innerHTML = "Retirer des favoris";

					nbrlikes.html(countlikes++);
					console.log(countlikes);
				}

				console.log(query);
				sendQuery(query);
			});

		}

		console.log(ellikes);








	</script>
	<?php
	}
	include('footer_lilt.php');
	?>

</body>
</html>
