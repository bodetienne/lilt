<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Playlists : Listen !</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="style/selectPlaylists.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/emmajs.js"></script>

</head>

<body>
<?php
require 'PDO/includes/pdo.php';
session_start();
$connexionStr=new PDO("mysql:host=localhost;dbname=lilt;charset=utf8",'root','');
$nom = $connexionStr->query("SELECT * FROM chanson");

$donnees = $nom->fetch();

include("header_lilt.php");
?>


<div class="container gallery-container">

    <h1>#PLAYLISTS</h1>

    <p class="page-description text-center"> Your favourite playlists just right there ! </p>

    <div class="searchbar">
      <input type="text" name="search" id="search-bar">
      <button class="button"><span> Search ! </span></button>
    </div>

    <div class="custom-select" style="width:200px;">
			<form method="POST">
				<select name="tag" size ="1">
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
	      </select>
				<button type="submit" class="submit-playlist"> Listen Music </button>
			</form>
    </div>

</div>

<?php

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
		$temp = $stmt -> fetch();
		array_push($lesartistes, $temp);

?>

<!-- Lecteurs -->
<div class="lecteur_compo">
  <ul>

    <li>
    <div class="innerCompo">

      <p> <?php echo  $leschansons[$i] -> nomChanson; ?> | <?php echo $lesartistes[0] -> nomArtiste ?>
      </p>

      <script src="vendors/audiojs/audio.min.js"></script>
      <script>  audiojs.events.ready(function() {var as = audiojs.createAll();});</script>


      <div class="CompoMedia">
        <?php echo "<audio src= '" . $leschansons[$i] -> fichierMp3 . "' preload='metadata' />"; ?>
        <img src="Images/Icon/fast-forward2.png" alt="precedent"><img src="Images/Icon/fast-forward1.png" alt="suivant">
      </div>

<?php

}


} catch(Exception $e) {
echo '<p> Erreur n° : ' . $e->getCode() . ' : ' . $e->getMessage(). '</p>';
echo '<p>Dans '. $e->getFile(). '('. $e->getLine() .')';
echo "<pre>";
var_dump ($e -> getTrace());
echo "</pre>";
}

?>



<!--			 	<li>
      <img src="Images/Icon/fast-forward2.png" alt="precedent"><img src="Images/Icon/fast-forward1.png" alt="suivant">
    </li>-->



      <!-- <img src="Images/Icon/update-arrow.png" alt="replaySong">
      <img src="Images/Icon/shuffle.png" alt="aléatoire"> -->
      <input id="optionSong" type=image src="Images/Icon/mode-circular-button.png" alt="optionSong" width="40px"><!-- Permet d'ouvrir le menu-->

      <!-- Le menu -->
      <div id="myModal" class="modal">

        <!-- Contenu Menu -->
        <div class="modal-content">

          <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Options</h2>
          </div>
          <div class="modal-body">
            <p><img id="coeurVide" src="Images/Icon/coeurVide.png" alt="coeurVide">Ajouter aux favoris</p>
            <p>Ajouter à la playlist</p>
          </div>
          <div class="modal-footer">
            <h3></h3>
          </div>

        </div>

      </div>


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
    </div>
    </li>


  </ul>
</div>







<?php
$nom->closeCursor();
include('footer_lilt.php');
?>
</body>
