<!DOCTYPE html>
<html>

<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/searchResult.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/selectPlaylists.css">
</head>
<?php
include('header_lilt.php');
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "lilt";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from chanson where nomChanson LIKE '%$search%' OR tag LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();


// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "<div class='EntireTableau'><div class='titleResearch'><h3>Search found :</h3></div><br/>";
				echo "<table class='tableau';>";
                echo "<tr><td><h4>Nom chanson </h4></td><td><h4>tag</h4></td></tr>";
            while ($results = $query->fetch()) {
				echo "<tr class='ligneDeResult'><td>";
                echo $results['nomChanson'];
				echo "</td><td>";
                echo $results['tag'];
				echo "</td></tr>";
            }
				echo "</table></div>";
        } else {
            echo 'Nothing found';
        }
 ?>



 <?php
   if (isset($_POST['tag'])){
     $tag = $_POST["tag"];
   } else {
     $tag = "No tag";
   }
 ?>




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
