<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Lecteur</title>
	
	<link rel="stylesheet" href="../vendors/Bootstrap/Bootstrap-Grid/vendors/bootsrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="../style/style_home2.css">
	<link rel="stylesheet" href="../style/style.css">
</head>

<body>

	
	
	
	<?php include('../header.php');	?>
	

	
					
					

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

	

	echo'
	<div class="grand-container">
		<h2 class="title">' . $_POST["tag"] . '</h2>';
		echo '<div class="inner">
			<div class="list">
				<ul id="playlist">';
					
		

					$link = mysqli_connect ( "localhost", "root", "", "tilt"); //accès à la base de donnée
					
					
					//valeur des différentes playlists dans les variables pour éviter les fautes de frappes dans l'algorithme
					/*$rock = "Rock";
					$rap = "Rap";
					$soul = "Soul";
					$pop = "Pop";
					$reggae = "Reggae";
					$notag = "No tag"; 
					
						if ($_POST["tag"] == $rock ) { //si rock choisi dans le formulaire --> entrer dans la boucle 
					
							$query_select = "SELECT * FROM chanson WHERE tag='" . $rock . "'"; //requette mysql : selection dans la base tab chanson (contenue dans * : tout), ou le tag = rock 

							if ($stmt = mysqli_prepare($link, $query_select)){ //variable = fonction de preparation de la requette avant l'éxécution
								mysqli_stmt_execute($stmt); //exécution de la fonction

								mysqli_stmt_bind_result($stmt,$idChanson, $nomChanson, $dureeChanson, $tag, $mp3); //bind = lier, on cible les colonnes de la tab en question 

								echo('<div class"succes">');

								while(mysqli_stmt_fetch($stmt)){ //renvoie les résultats de la requette
									echo('<p>Song name = ' . $nomChanson . ', duration = ' . $dureeChanson . ' </p>');
								}
							}

							//répétition de la boucle pour tous les tags
						} else if ($_POST["tag"] == $rap ) {
					
							$query_select = "SELECT * FROM chanson WHERE tag='" . $rap . "'";

							if ($stmt = mysqli_prepare($link, $query_select)){
								mysqli_stmt_execute($stmt);

								mysqli_stmt_bind_result($stmt,$idChanson, $nomChanson, $dureeChanson, $tag, $mp3);

								echo('<div class"succes">');

								while(mysqli_stmt_fetch($stmt)){
									echo('<p>Song name = ' . $nomChanson . ', duration = ' . $dureeChanson . '</p>');
								}
							} 

							
						} else if ($_POST["tag"] == $soul ) {
					
							$query_select = "SELECT * FROM chanson WHERE tag='" . $soul . "'";

							if ($stmt = mysqli_prepare($link, $query_select)){
								mysqli_stmt_execute($stmt);

								mysqli_stmt_bind_result($stmt,$idChanson, $nomChanson, $dureeChanson, $tag, $mp3);

								echo('<div class"succes">');

								while(mysqli_stmt_fetch($stmt)){
									echo('<p>Song name = ' . $nomChanson . ', duration = ' . $dureeChanson . '</p>');
								}
							} 

							
						} else if ($_POST["tag"] == $pop ) {
					
							$query_select = "SELECT * FROM chanson WHERE tag='" . $pop . "'";

							if ($stmt = mysqli_prepare($link, $query_select)){
								mysqli_stmt_execute($stmt);

								mysqli_stmt_bind_result($stmt,$idChanson, $nomChanson, $dureeChanson, $tag, $mp3);

								echo('<div class"succes">');

								while(mysqli_stmt_fetch($stmt)){
									echo('<p>Song name = ' . $nomChanson . ', duration = ' . $dureeChanson . '</p>');
								}
							} 


							
						} else if ($_POST["tag"] == $reggae ) {
					
							$query_select = "SELECT * FROM chanson WHERE tag='" . $reggae . "'";

							if ($stmt = mysqli_prepare($link, $query_select)){
								mysqli_stmt_execute($stmt);

								mysqli_stmt_bind_result($stmt,$idChanson, $nomChanson, $dureeChanson, $tag, $mp3);

								echo('<div class"succes">');

								while(mysqli_stmt_fetch($stmt)){
									echo('<p>Song name = ' . $nomChanson . ', duration = ' . $dureeChanson . ' <audio controls="">
												<source src="'. $mp3 .'" type="audio/mpeg"/>
											</audio> </p>');
								}
							 }  
							} else if ($_POST["tag"] == $notag ) {
					
							$query_select = "SELECT * FROM chanson WHERE tag='" . $notag . "'";

							if ($stmt = mysqli_prepare($link, $query_select)){
								mysqli_stmt_execute($stmt);

								mysqli_stmt_bind_result($stmt,$idChanson, $nomChanson, $dureeChanson, $tag, $mp3);

								echo('<div class"succes">');

								while(mysqli_stmt_fetch($stmt)){
									echo('<p>Song name = ' . $nomChanson . ', duration = ' . $dureeChanson . '</p>');
								}
							 }
							} */
						
					

					//Fonction à améliorer 
							function triTag () {
								
								$tag = $_POST["tag"];
								
								$query_select = "SELECT * FROM chanson WHERE tag='" . $tag . "'";
								$link = mysqli_connect ( "localhost", "root", "", "tilt"); //accès à la base de donnée
								
								if ($stmt = mysqli_prepare($link, $query_select)){
									mysqli_stmt_execute($stmt);

									mysqli_stmt_bind_result($stmt,$idChanson, $nomChanson, $dureeChanson, $tag, $mp3Link);

									echo('<div class"succes">');

									while(mysqli_stmt_fetch($stmt)){
										echo('<p>Song name = ' . $nomChanson . ', duration = ' . $dureeChanson . '</p> 	<audio controls="">
												<source src="'. $mp3Link .'" type="audio/mpeg"/>
											</audio>');
									}
								}
							}
					
						echo triTag();
							 


							
				echo '</ul>
			</div>
		</div>
	</div>';
	
		
	?>

</body>
</html>