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



	/* requette permettant d'insérer les valeurs écrites dans la tab chanson */
	$sql = "INSERT INTO chanson (nomChanson, dureeChanson, tag)
	VALUES ('" .  $_POST['name'] .  "', '" . $_POST['duree'] ."', '" . $_POST['tag'] ."')"; 

	if (mysqli_query($link, $sql)) {
		echo " ";
	} else {
		echo "L'import de votre chanson n'a pas pu être réalisé. Veuillez réessayer. " . $sql . "<br>" . mysqli_error($link);
	}
?>