<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Mes compositions</title>

	<link rel="stylesheet" href="vendors/Bootstrap/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style_home2.css">
	<link rel="stylesheet" href="style/style2.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>
	
					

<!----------------------------------------------------
	HEADER
----------------------------------------------------->

<?php include("header.php")?>
	
<!----------------------------------------------------
	CONTENTS
----------------------------------------------------->
<!-- style dans : -->
	
	<div class="page_compo">
		<div class="lecteur_compo">
			<ul>
			
				<li><img src="Images/Icon/playbutton.png" alt="bouton play"></li>
			
			
			
				<li>Can I stay | <?php
	
								if($_SESSION['nom_utilisateur'] !== ""){
								$user = $_SESSION['nom_utilisateur'];
									// afficher un message: ici le nom d'user
								echo "$user";
								}
           					?>  
				</li>
			

					<script src="vendors/audiojs/audio.min.js"></script>
					<script>  audiojs.events.ready(function() {var as = audiojs.createAll();});</script>
				
				
				<li>
					<audio src="lecteur/music/Bruno Mars - When I Was Your Man.mp3" preload="auto" />
				</li>
			
			
			
				<li>
					<img src="Images/Icon/fast-forward2.png" alt="precedent"><img src="Images/Icon/fast-forward1.png" alt="suivant">
				</li>
			
			
				<li>
					<img src="Images/Icon/update-arrow.png" alt="replaySong">
					<img src="Images/Icon/shuffle.png" alt="aléatoire">
					<img src="Images/Icon/mode-circular-button.png" alt="optionSong">
				</li>
				
			</ul>
		</div>
	</div>
	
	
<!---------------------------------------------------
	FOOTER
---------------------------------------------------->

<?php include("footer.php"); ?>	
	
	
	
</body>
</html>