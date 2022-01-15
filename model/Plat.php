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
        $obj=new Plat;
        $obj1=new Plat;
        $obj->setId(1);
        $obj->setPricePlat(20);
        $obj->setImagePlat('../../resources/assets/logo/2.jpg');
        $obj->setLibelleplat('Crepes with Oranges and Honey');
        $obj->setDetailsPlat('20min');
        $obj->setQtePlat(0);
        $obj->setIngredients('aaaa');
        $obj->setTypePlat('salad');
        $obj1->setId(2);
        $obj1->setPricePlat(20);
        $obj1->setImagePlat('../../resources/assets/logo/2.jpg');
        $obj1->setLibelleplat('Cake citron');
        $obj1->setDetailsPlat('20min');
        $obj1->setQtePlat(0);
        $obj1->setIngredients('aaaa');
        $obj1->setTypePlat('salad');
        $myArray = array();
        array_push($myArray,$obj);
        array_push($myArray,$obj1);
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
