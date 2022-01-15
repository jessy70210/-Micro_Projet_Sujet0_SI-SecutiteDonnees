<?php
require($_SERVER['DOCUMENT_ROOT'].'/model/Plat.php');

class controllerMenu{

    public function listPlatByType($type){

        $plat = new Plat();
        $plats = $plat->listPlats();
        $platsFiltres=$plat->getPlatByType($type,$plats);
        require ($_SERVER['DOCUMENT_ROOT'].'/view/accueil/Menu.php');
    }


}

