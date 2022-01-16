<?php
require ($_SERVER['DOCUMENT_ROOT'].'/model/Plat.php');

class controllerCommande{

    public static function readAll(){
        $qte=$_GET['qte'];
        if(isset($_POST['id'])){
            $platModel=new Plat();
            $plats=$platModel->listPlats();
            $plat=$platModel->getPlatByID($_POST['id'],$plats);
            $plat->setQtePlat($_POST['qty']);
            $_SESSION['myData'][] = array(
                'libelleplat'=> $plat->getLibellePlat(),
                 'qtePlat' =>$plat->getQtePlat(),
                'imagePlat'=>$plat->getImagePlat(),
                'pricePlat'=>$plat->getPricePlat()
            );

            header('Location:?controller=PlatDetails&id='.$_POST['id'].'&qte='.$_POST['qty']);
        }else{
            require(File::build_path(array("view/accueil", "Commande.php")));
        }



    }

}
