<?php
require ($_SERVER['DOCUMENT_ROOT'].'/model/Plat.php');
session_start();
class controllerCommande{

    public function ajouterPlat(){

        if(isset($_POST['id'])){
            $platModel=new Plat();
            $plats=$platModel->listPlats();
            $plat=$platModel->getPlatByID($_POST['id'],$plats);
            $plat->setQtePlat($_POST['qty']);
            $_SESSION['myData'][] = array(
                'libelleplat'=> $plat->getLibellePlat(),
                 'qtePlat' =>$plat->getQtePlat(),
                'imagePlat'=>$plat->getImagePlat()
            );

        }
       //require($_SERVER['DOCUMENT_ROOT'].'/controller/routeur.php?controller=controllerPlatDetails&action=platChoisi&id='.$_POST['id'].'&qte=0');
        header('Location:routeur.php?controller=controllerPlatDetails&action=platChoisi&id='.$_POST['id'].'&qte='.$_POST['qty']);
    }
    public function afficherCommande(){
           require ($_SERVER['DOCUMENT_ROOT'].'/view/accueil/Commande.php');
    }
}
