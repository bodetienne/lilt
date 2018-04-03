

<?php


<!DOCTYPE html>
<html>

<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/searchResult.css">
</head>
<?php
include('../header_lilt.php');
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
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";
                echo "<tr><td class='LigneNomTag';\">Nom chanson </td><td;\">tag</td><td;\"></td></tr>";
            while ($results = $query->fetch()) {
				echo "<tr><td;\">";
                echo $results['nomChanson'];
				echo "</td><td;\">";
                echo $results['tag'];
				echo "</td></tr>";
            }
				echo "</table>";
        } else {
            echo 'Nothing found';
        }
 ?>
