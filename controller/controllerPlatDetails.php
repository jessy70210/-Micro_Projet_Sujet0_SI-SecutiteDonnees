<?php
require ($_SERVER['DOCUMENT_ROOT'].'/model/Plat.php');

class controllerPlatDetails{

    public function platChoisi($id)
    {
        $qte = $_GET['qte'];
        $plat = new Plat();
        $plats = $plat->listPlats();
        $platChoisi = $plat->getPlatById($id, $plats);
        require ($_SERVER['DOCUMENT_ROOT'].'/view/accueil/PlatDetails.php');
    }
}
?>