<?php 
	//requires da aplicação
	session_start();

	require_once 'app/core/Core.php';
	require_once 'app/controllers/LoginController.php';
	require_once 'vendor/autoload.php';

	$core = new Core;
	echo $core->start($_GET);

 ?>