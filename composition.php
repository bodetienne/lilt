<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Mes compositions</title>

	<link rel="stylesheet" href="vendors/Bootstrap/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style_home2.css">
	<link rel="stylesheet" href="style/style2.css">
	<script src="js/emmajs.js"></script>
	
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
				
				<li>
				<div class="innerCompo">
			
					<img src="Images/Icon/playbutton.png" alt="bouton play">
			
			
			
					<p> Can I stay | <?php
	
								if($_SESSION['nom_utilisateur'] !== ""){
								$user = $_SESSION['nom_utilisateur'];
									// afficher un message: ici le nom d'user
								echo "$user";
								}
           					?>  
					</p>
				
			

					<script src="vendors/audiojs/audio.min.js"></script>
					<script>  audiojs.events.ready(function() {var as = audiojs.createAll();});</script>
				
				
					<div class="CompoMedia">
						<audio src="lecteur/music/Bruno Mars - When I Was Your Man.mp3" preload="auto" />
						<img src="Images/Icon/fast-forward2.png" alt="precedent"><img src="Images/Icon/fast-forward1.png" alt="suivant">
					</div>	
						
				
			
			
			
<!--			 	<li>
					<img src="Images/Icon/fast-forward2.png" alt="precedent"><img src="Images/Icon/fast-forward1.png" alt="suivant">
				</li>-->
			
			
			
					<img src="Images/Icon/update-arrow.png" alt="replaySong">
					<img src="Images/Icon/shuffle.png" alt="aléatoire">
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
							  <p><img src="Images/Icon/coeurVide.png">Ajouter aux favoris</p>
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
	</div>
	
	
<!---------------------------------------------------
	FOOTER
---------------------------------------------------->

<?php include("footer.php"); ?>	
	
	
	
</body>
</html>