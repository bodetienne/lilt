<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PDO</title>
</head>

<body>
<?php
	
	require 'includes/pdo.php';
	
	
		//RECUPERER
	try{
		$query = "SELECT * FROM alerte";
		$resultats = $connexion->query($query);
		/*echo "<pre>";
		var_dump($resultats -> fetchAll());
		echo "</pre>";*/

			//1er moyen d'accéder aux résultats
		/*$tableauResultats = $resultats -> fetchAll();
		echo $tableauResultats[2] -> messageAlerte;*/

			//2e moyen d'ccéder aux résultats
		while($alerteObj = $resultats -> fetch()) {
			echo "<pre>";
			echo "<p>" . $alerteObj -> messageAlerte . "</p>";
			echo "</pre>";
		}

		$resultats -> closeCursor();


			//AJOUTER
		/*$queryAjout = "INSERT INTO responsable_pedagogique(idResponsable, nomResponsable, prenomResponsable) VALUES('1', 'Bodet', 'Etienne')";
		$nbModif = $connexion-> exec($queryAjout);
		echo "<p> Le nombre de modifications est de $nbModif </p>";*/


			//MODIFIER
		/*$queryModif = "UPDATE responsable_pedagogique SET nomResponsable = 'Marchesseau', prenomResponsable = 'Johan' WHERE idResponsable = '1'";
		$nbModif = $connexion-> exec($queryModif);
		echo "<p> Le nombre de modifications est de $nbModif";*/


			//SUPPRIMER
		/*$querySuppr = "DELETE FROM responsable_pedagogique WHERE idResponsable = 1";
		$nbModif = $connexion-> exec($querySuppr);
		echo "<p> Le nombre de modifications est de $nbModif";*/
		
			
			//RECUPERER
		$query = "SELECT * FROM alerte WHERE idAlerte=:id";
		$stmt = $connexion->prepare($query);
		$stmt -> bindValue(':id', 2); //bind = lier
		$stmt -> execute();
		
		while($alerteObj = $stmt -> fetch()) {
			echo "<pre>";
			echo "<p>" . $alerteObj -> messageAlerte . "</p>";
			echo "</pre>";
		}
		
		$stmt -> bindValue(':id', 6);
		$stmt -> execute();
		while($alerteObj = $stmt -> fetch()) {
			echo "<pre>";
			echo "<p>" . $alerteObj -> messageAlerte . "</p>";
			echo "</pre>";
		}
		
		
			//MODIFIER
		/*$queryModif = "UPDATE responsable_pedagogique SET nomResponsable = 'Marchesseau', prenomResponsable = 'Johan' WHERE idResponsable = :id"
		//PDO::PARAM_STR permet de spécifier que le p;
		$stmtModif = $connexion-> prepare($query);
		$stmtModif -> bindValue(':id', 1);
		$stmtModif -> execute();
		*/
		
		
			//SUPPRIMER
		/*$querySuppr = "DELETE FROM responsable_pedagogique WHERE idResponsable = :id";
		$stmtSuppr = $connexion-> prepare($querySuppr);
		$stmtSuppr -> bindValue(':id', 1);
		$stmtSuppr -> execute();*/
		
			//AJOUTER
		$queryInsert = "INSERT INTO responsable_pedagogique(idResponsable, nomResponsable, prenomResponsable) VALUES(:id, :nom, :prenom)";
		$stmtInsert = $connexion-> prepare($queryInsert);
		$stmtInsert -> bindValue(':id', 2);
		$stmtInsert -> bindValue(':nom', "Marchesseau");
		$stmtInsert -> bindValue(':prenom', "Johan");
		$stmtInsert -> execute();
		
		//rowCount permet de compter le nombre de lignes modifiés/ supprimés etc...
		
	
		
	} catch(Exception $e) {
		echo '<p> Erreur n° : ' . $e->getCode() . ' : ' . $e->getMessage(). '</p>';
		echo '<p>Dans '. $e->getFile(). '('. $e->getLine() .')';
		echo "<pre>";
		var_dump ($e -> getTrace());
		echo "</pre>";
	}
	

?>
</body>
</html>