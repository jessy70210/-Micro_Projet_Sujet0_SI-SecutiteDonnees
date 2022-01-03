<?php
class controllerAccueil{
  public static function readAll(){
    $pageTitle = "Accueil";
    $table = isset($_REQUEST['table']) ? "You sit in table number ".$_REQUEST['table']: "A problem has arisen";
    require(File::build_path(array("view", "navbar.php")));
    require(File::build_path(array("view/accueil", "accueil.php")));
    require(File::build_path(array("view", "footer.php")));
  }
}
