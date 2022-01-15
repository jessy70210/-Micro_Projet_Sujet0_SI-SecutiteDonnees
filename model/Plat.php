<?php
class Plat
{
    private $id;
    private $libelleplat;
    private $pricePlat;
    private $imagePlat;
    private $detailsPlat;
    private $durationPlat;
    private $qtePlat;
    private $ingredients;
    private $typePlat;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelleplat()
    {
        return $this->libelleplat;
    }

    /**
     * @param mixed $libelleplat
     */
    public function setLibelleplat($libelleplat)
    {
        $this->libelleplat = $libelleplat;
    }

    /**
     * @return mixed
     */
    public function getPricePlat()
    {
        return $this->pricePlat;
    }

    /**
     * @param mixed $pricePlat
     */
    public function setPricePlat($pricePlat)
    {
        $this->pricePlat = $pricePlat;
    }

    /**
     * @return mixed
     */
    public function getImagePlat()
    {
        return $this->imagePlat;
    }

    /**
     * @param mixed $imagePlat
     */
    public function setImagePlat($imagePlat)
    {
        $this->imagePlat = $imagePlat;
    }

    /**
     * @return mixed
     */
    public function getDetailsPlat()
    {
        return $this->detailsPlat;
    }

    /**
     * @param mixed $detailsPlat
     */
    public function setDetailsPlat($detailsPlat)
    {
        $this->detailsPlat = $detailsPlat;
    }

    /**
     * @return mixed
     */
    public function getDurationPlat()
    {
        return $this->durationPlat;
    }

    /**
     * @param mixed $durationPlat
     */
    public function setDurationPlat($durationPlat)
    {
        $this->durationPlat = $durationPlat;
    }

    /**
     * @return mixed
     */
    public function getQtePlat()
    {
        return $this->qtePlat;
    }

    /**
     * @param mixed $qtePlat
     */
    public function setQtePlat($qtePlat)
    {
        $this->qtePlat = $qtePlat;
    }

    /**
     * @return mixed
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @return mixed
     */
    public function getTypePlat()
    {
        return $this->typePlat;
    }

    /**
     * @param mixed $typePlat
     */
    public function setTypePlat($typePlat)
    {
        $this->typePlat = $typePlat;
    }


    /**
     * @param mixed $ingredients
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
    public function listPlats(){
        $main1=new Plat;
        $main2=new Plat;
        $main3=new Plat;
        $main4=new Plat;
        $sauce1=new Plat;
        $sauce2=new Plat;
        $main1->setId(1);
        $main1->setPricePlat(20);
        $main1->setImagePlat('../../resources/assets/img/2.jpg');
        $main1->setLibelleplat('Crepes with Oranges and Honey');
        $main1->setDetailsPlat('20min');
        $main1->setQtePlat(0);
        $main1->setIngredients('aaaa');
        $main1->setTypePlat('main');
        $main2->setId(2);
        $main2->setPricePlat(20);
        $main2->setImagePlat('../../resources/assets/img/main1.jpg');
        $main2->setLibelleplat('Cake citron');
        $main2->setDetailsPlat('20min');
        $main2->setQtePlat(0);
        $main2->setIngredients('aaaa');
        $main2->setTypePlat('main');
        $main3->setId(3);
        $main3->setPricePlat(20);
        $main3->setImagePlat('../../resources/assets/img/main2.jpg');
        $main3->setLibelleplat('Crepes with Oranges and Honey');
        $main3->setDetailsPlat('20min');
        $main3->setQtePlat(0);
        $main3->setIngredients('aaaa');
        $main3->setTypePlat('main');
        $main4->setId(4);
        $main4->setPricePlat(20);
        $main4->setImagePlat('../../resources/assets/img/main3.jpg');
        $main4->setLibelleplat('Crepes with Oranges and Honey');
        $main4->setDetailsPlat('20min');
        $main4->setQtePlat(0);
        $main4->setIngredients('aaaa');
        $main4->setTypePlat('main');
        $sauce1->setId(5);
        $sauce1->setPricePlat(20);
        $sauce1->setImagePlat('../../resources/assets/img/sauce1.jpg');
        $sauce1->setLibelleplat('Crepes with Oranges and Honey');
        $sauce1->setDetailsPlat('20min');
        $sauce1->setQtePlat(0);
        $sauce1->setIngredients('aaaa');
        $sauce1->setTypePlat('sauce');
        $sauce2->setId(6);
        $sauce2->setPricePlat(20);
        $sauce2->setImagePlat('../../resources/assets/img/sauce2.jpg');
        $sauce2->setLibelleplat('Crepes with Oranges and Honey');
        $sauce2->setDetailsPlat('20min');
        $sauce2->setQtePlat(0);
        $sauce2->setIngredients('aaaa');
        $sauce2->setTypePlat('sauce');
        $myArray = array();
        array_push($myArray,$main1);
        array_push($myArray,$main2);
        array_push($myArray,$main3);
        array_push($myArray,$main4);
        array_push($myArray,$sauce1);
        array_push($myArray,$sauce2);
        return $myArray;
    }
    public function getPlatByID($id,$plats){
        foreach ($plats as $plat):
            if($plat->getId() == $id){
                return $plat;
            }
        endforeach;
    }
    public function getPlatByType($type,$plats){
        $myArray = array();
        foreach ($plats as $plat):
            if($plat->getTypePlat() == $type){
                array_push($myArray,$plat);
            }
        endforeach;
        return $myArray;
    }


}
?>
