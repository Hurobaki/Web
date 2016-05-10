<?php 

		$hote = 'localhost';
		$base = 'h034429f';
		$user = 'h034429f';
		$pass = 'h034429f';
		
		try
		{
			$bdd = new PDO("mysql:host=$hote;dbname=$base;charset=utf8",$user,$pass);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (Exception $e)
		{
			die('Erreur : ' .$e->getMessage());
		}
 ?>