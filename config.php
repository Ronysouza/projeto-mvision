<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){

		define('BASE_URL','http://mvision.ga/');
		$config['dbname'] = 'nova_mvc';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = ''; 


	}else{

		$congif['dbname'] = 'bancodoservidor';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = ''; 

	}

  global $db;

try{

  
	
	//$db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);



}catch(PDOException $e){

	echo 'FALHOU'.$e->getMessage();
	exit;

}