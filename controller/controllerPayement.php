<?php


class controllerPayement
{
    public static function readAll()
    {

        require(File::build_path(array("view/accueil", "Payement.php")));
    }
}