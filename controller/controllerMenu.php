<?php
require($_SERVER['DOCUMENT_ROOT'].'/model/Plat.php');

class controllerMenu{


	public static function readAll(){

		$type = isset($_GET['type']) ? $_GET['type'] : 'salad';
		error_log('type : '.$type);
		$plat = new Plat();
		$plats = $plat->listPlats();
		$platsFiltres=$plat->getPlatByType($type,$plats);
//        require ($_SERVER['DOCUMENT_ROOT'].'/view/accueil/Menu.php');
		require(File::build_path(array("view/accueil", "Menu.php")));
	}


}

