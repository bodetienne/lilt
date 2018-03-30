<?php

if(!empty($_GET['action'])){
	if($_GET['action'] == "clean"){
		
	}
}

if(!empty($_GET['action'])){
	if($_GET['action'] == "like" || $_GET['action'] == "unlike" &&
	  !empty($_GET['song'])){
		require_once 'PDO/includes/pdo.php';
		session_start();
		if ($_GET['action'] == "like"){
			$like = true;
		} else if ($_GET['action'] == "unlike"){
			$like = false;
		}
		
		likeSong($like, $_SESSION['id'], $_GET['song'], $connexion);
		
	}
}

if(!empty($_GET['action'])){
	if($_GET['action'] == "isliked" &&
	  !empty($_GET['song'])){
		
		require_once 'PDO/includes/pdo.php';
		session_start();
		
		echo(userLiked($_GET['song'], $_SESSION['id'], $connexion));
	}
}

function start(){
	if(!isset($_COOKIE["PHPSESSID"]))
	{
	  session_start();
	}
}

/**
* By Teo
* Envoi un like/unlike pour une chanson
*
* @param    boolean  $like true = ajouter un like, false = retirer
			int  $user l'id de l'utilisateur
			int $song  la chanson concernée
			PDOConnection $connection la connection PDO à la BDD
* @return   void
*
*/
function likeSong($like, $user, $song, $connexion){
	echo('<br>// Exe likeSong with params song = (' . $song . ') || user = (' . $user . ') || like = (' . $like . ') //<br>');
	
	$query = "SELECT jaime FROM chanson WHERE idChanson = " . $song;
	$stmt = $connexion->prepare($query);
	$stmt -> execute();


	$likes = $stmt->fetch();
	echo(' // likes begin : ' . $likes->jaime . '// ');
	$likes = explode(",", $likes->jaime);
	
	if($like){
		array_push($likes, $user);
	} else {
		for($i = 0; $i < sizeof($likes); $i++){
			if($likes[$i] == $user){
				array_splice($likes, $i, 1);
			}
		}
	}
	
	//Reconstruction
	$output = "";
	for($i = 0; $i < sizeof($likes); $i++){
		if($likes[$i] != ""){
			if($i == sizeof($likes)-1){
				$output .= $likes[$i];
				echo('	add ' . $likes[$i] . ' to output	');
			} else {
				$output .= $likes[$i] . ",";
				echo('	add ' . $likes[$i] . ' , to output	');

			}
		}
	}
		
	
	var_dump($likes);
	echo('// End function, output = ' . $output);
	
	$query = 'UPDATE chanson SET jaime="' . $output . '" WHERE idChanson = ' . $song;
	$stmt = $connexion->prepare($query);
	$stmt -> execute();
}


/**
* By Teo
* Check si l'utilisateur à déjà liké
*
* @param    int  $song la chanson demandée
			int  $user l'id de l'utilisateur courant
			PDOConnection $connection la connection PDO à la BDD
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

?>