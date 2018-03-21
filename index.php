<?php

// ROUTER

if (isset($_GET['page']) && !empty($_GET['page'])) {
	// Si page est dans le GET et que la page dans GET n'est pas vide alors...

	switch ($_GET['page']) {
		// Dans le cas ou page est dans le GET on va récupérer la valeur de GET
		case 'header': // Dans le cas du header
			$view = "view/header.php"; // variable // view = au chemin.php
			$controller = "controller/controller_home.php"; //variable // controller = "au chemin du controller.php"
			include $controller; // inclus le controller dans la page
			break;
		// Dans le cas ou page est dans le GET on va récupérer la valeur de GET
		case 'contact': // Dans le cas du header
			$view = "view/contact.php"; // variable // view = au chemin.php
			//$controller = "controller/controller_home.php"; //variable // controller = "au chemin du controller.php"
			//include $controller; // inclus le controller dans la page
			break;
		
		default:
			$view = "view/home.php"; // Par defaut, la variable est égale au chemin.php 
			$controller = "controller/ controller_home.php";
			include $controller; 
			break;
	}
} else { // Sinon
	$view = "view/home.php"; //view = au chemin.php
	$controller = "controller/ controller_home.php";
	include $controller; 
}

//RENDERER


	include "./view/head.php";
	include "./view/header.php";
	include $view;
	include "./view/footer.php";
?>
