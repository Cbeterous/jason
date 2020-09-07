<?php

/**
 * 
 */
class Connexion 
{
	protected static $base;
	private static $serveur='localhost';
	private static $bdd='jason';  		
	private static $user='root' ;    		
	private static $mdp='' ;
	
	function __construct()
	{
		// connexion à la bdd
		try{
			Connexion::$base = new PDO('mysql:host='.Connexion::$serveur.';dbname='.Connexion::$bdd,Connexion::$user,Connexion::$mdp);
			Connexion::$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
		} catch (Exception $e){
			die('Erreur : '.$e->getMessage());
		}
	}

	public function insert ($name)
	{
		$test = $this->getExist($name);
		if ($test === 0) {
			$sql = 'INSERT INTO argonautes (nom) VALUES (?)';
			$insert = Connexion::$base->prepare($sql);
			$insert->execute(array($name));
			return 1;
		} else {
			return 0;
		}
	}

	public function getExist($value)
	{
		$sql = 'SELECT * FROM argonautes WHERE nom = ?';
		$one = Connexion::$base->prepare($sql);
		$one->execute(array($value));
		echo $count = $one->rowCount();
		return $count = $one->rowCount();
	}

	public function getList()
	{
		$sql = 'SELECT nom FROM argonautes';
		$list = Connexion::$base->prepare($sql);
		$list->execute();
		return $list->fetchAll(PDO::FETCH_COLUMN, 0);
	}
}

