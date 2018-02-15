<?php

class PDOModel
{
	public static $var = 'test de class static';
	public static $link;
	public static $db_connexion;
	public static $host_info;
	public static $dbh;
	
	//CONNECTION
	
	//Connection /!\ à faire en premier pour pouvoir utiliser le PDOModele
	public static function connectDB($host, $user, $password, $db){
		self::$link = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $password);
		
		self::$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		self::$link->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF-8'");
		self::$link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return(self::$link);
	}
	
	public static function getConnexion(){
		return(self::$link);
	}
	
	
	//SQL
	
	//Inserer une ligne
	public static function insertSQL($table, $cln, $value) {
			$query = 'INSERT INTO `' . $table . '` (' . $cln . ') VALUE (' . $value . ')';
			return (self::exeSQL($query));
	}
	
	//Obtenir un array d'objects de la BDD
	public static function getAllSQL($table, $select, $where = false) {
		
		if($select != "*"){
			$select = "`" . $select . "`";
		}
		
		$query = 'SELECT ' . $select . ' FROM ' . $table . ' ';
		
		if($where != false) {
			$query .= $where;
		}
		//echo('<br>Query : ' . $query . ' <br>');
		$selector = self::returnSQL($query);
		$output = array();
		
		while( $obj = $selector->fetch() ) {
			$output[] = $obj;
		}
		return($output);
	}
	
	
	//Obtenir 1 object de la BDD
	//Si plusieur elements existe seulement le 1er sera retourné
	public static function getSQL($table, $select, $where = false) {
		
		if($select != "*"){
			$select = "`" . $select . "`";
		}
		
		$query = 'SELECT ' . $select . ' FROM `' . $table . '` ';
		
		if($where != false) {
			$query .= ' WHERE ' . $where;
		}
 		//echo('<br>pdoModel : Query : ' . $query . ' <br>');
		$output = self::returnSQL($query);
		return($output->fetch());
	}
	
	
	//Executer en brut une requete select
	//Retourne le selector PDO
	public static function returnSQL($query){
		$selector = self::$link->query($query);
		//$output = $selector->fetch();
		//$selector->closeCursor();
		return $selector;
	}
	
	//Executer une requete SQL
	public static function exeSQL($query){

		//echo $query;

		return (self::$link->query($query));
	}
	
	public static function deleteSQL($table, $where){
		
		if ($where == ""){
			//Error
		} else {
			$query = "DELETE FROM `" . $table . "` WHERE " . $where . ";";
			self::exeSQL($query);
		}
	}
	
	//Mettre à jour la BDD
	public static function updateSQL($table, $id, $cln){
		$query = "UPDATE `" . $table . "` SET " . $cln . " WHERE `" . $table . "`.`id` = " . $id . ";";
		
		
		//$query = "UPDATE `user` SET `img_present` = 'sfbdg,h;jkvf', `img_banner` = 'fbdg,h;jkedr', `adresse` = 'sfdgbdfnh,jre', `user_name` = 'dfvergbnth,yjk;ve', `user_firstname` = 'vfegbr,tjhyuve', `user_mail` = 'dcfvgbrhnty,juk;rev', `user_password` = 'd fghjklre' WHERE `user`.`id` = 4;";
		return(self::exeSQL($query));
	}
	
	
	
	
	//utilities
	
	public static function printArray($array){
		foreach($array as $element)
		{
			echo $element . '<br />';
		}
	}
}

?>