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
$query = $pdo->prepare("select * from chanson where nomChanson LIKE '%$search%' OR tag LIKE '%$search%' OR fichierMp3 LIKE  '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();


// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "<div class='EntireTableau'><div class='titleResearch'><h3>Search found :</h3></div><br/>";
				echo "<table class='tableau';>";
                echo "<tr><td><h4>Nom chanson </h4></td><td><h4>tag</h4></td><td><h4>Listen</h4></td></tr>";
            while ($results = $query->fetch()) {
				echo "<tr class='ligneDeResult'><td>";
                echo $results['nomChanson'];
				echo "</td><td>";
                echo $results['tag'];
        echo "</td><td>";
                echo "  <audio controls='controls' preload='metadata'>
                              <source src=\" ". $results['fichierMp3'] . "\" type='audio/mp3' />
                              Votre navigateur n'est pas compatible
                        </audio>
                    ";

               '
                  </div>
                </div>
              </div>';
				echo "</td></tr>";
            }
				echo "</table></div>";
        } else {
            echo 'Nothing found';
        }
 ?>



   <?php
    include("footer_lilt.php");
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
</body>
