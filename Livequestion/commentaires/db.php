<?php
	try{
		$db = new PDO('mysql:host=localhost;dbname=livequestion;charset=utf8','root','root');
		$db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setattribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		return $db;
	}catch(PDOException $e){
		echo 'erreur de connexion à la base de données' .$e->getMessage();
	}
?>