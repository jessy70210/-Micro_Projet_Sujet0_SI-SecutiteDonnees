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
        $main1->setLibelleplat('ribs');
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

        $main5 = new Plat();
        $main5->setId(6);
        $main5->setPricePlat(12);
        $main5->setImagePlat('../../resources/assets/img/plate-001.png');
        $main5->setLibelleplat('Tandoori Chilcken');
        $main5->setDetailsPlat('15min');
        $main5->setQtePlat(0);
        $main5->setIngredients('aaaa');
        $main5->setTypePlat('main');

        $main6 = new Plat();
        $main6->setId(7);
        $main6->setPricePlat(10);
        $main6->setImagePlat('../../resources/assets/img/plate-007.png');
        $main6->setLibelleplat('Vegan food');
        $main6->setDetailsPlat('10min');
        $main6->setQtePlat(0);
        $main6->setIngredients('aaaa');
        $main6->setTypePlat('salad');

        $main7 = new Plat();
        $main7->setId(8);
        $main7->setPricePlat(10);
        $main7->setImagePlat('../../resources/assets/img/plate-002.png');
        $main7->setLibelleplat('Salmon');
        $main7->setDetailsPlat('20min');
        $main7->setQtePlat(0);
        $main7->setIngredients('aaaa');
        $main7->setTypePlat('main');

        $main8 = new Plat();
        $main8->setId(9);
        $main8->setPricePlat(10);
        $main8->setImagePlat('../../resources/assets/img/plate-006.png');
        $main8->setLibelleplat('Cottage cheese with couli');
        $main8->setDetailsPlat('5min');
        $main8->setQtePlat(0);
        $main8->setIngredients('aaaa');
        $main8->setTypePlat('dessert');

        $main9 = new Plat();
        $main9->setId(10);
        $main9->setPricePlat(10);
        $main9->setImagePlat('../../resources/assets/img/drink1.jpeg');
        $main9->setLibelleplat('Cottage cheese with couli');
        $main9->setDetailsPlat('5min');
        $main9->setQtePlat(0);
        $main9->setIngredients('aaaa');
        $main9->setTypePlat('drink');

        $main10 = new Plat();
        $main10->setId(11);
        $main10->setPricePlat(10);
        $main10->setImagePlat('../../resources/assets/img/drink2.jpeg');
        $main10->setLibelleplat('Cottage cheese with couli');
        $main10->setDetailsPlat('5min');
        $main10->setQtePlat(0);
        $main10->setIngredients('aaaa');
        $main10->setTypePlat('drink');

        $main11 = new Plat();
        $main11->setId(12);
        $main11->setPricePlat(10);
        $main11->setImagePlat('../../resources/assets/img/drink3.jpg');
        $main11->setLibelleplat('Cottage cheese with couli');
        $main11->setDetailsPlat('5min');
        $main11->setQtePlat(0);
        $main11->setIngredients('aaaa');
        $main11->setTypePlat('drink');

        $main12 = new Plat();
        $main12->setId(12);
        $main12->setPricePlat(10);
        $main12->setImagePlat('../../resources/assets/img/drink4.jpg');
        $main12->setLibelleplat('Cottage cheese with couli');
        $main12->setDetailsPlat('5min');
        $main12->setQtePlat(0);
        $main12->setIngredients('aaaa');
        $main12->setTypePlat('drink');

        $main13 = new Plat();
        $main13->setId(13);
        $main13->setPricePlat(10);
        $main13->setImagePlat('../../resources/assets/img/dessert1.jpg');
        $main13->setLibelleplat('Cottage cheese with couli');
        $main13->setDetailsPlat('5min');
        $main13->setQtePlat(0);
        $main13->setIngredients('aaaa');
        $main13->setTypePlat('dessert');

        $main14 = new Plat();
        $main14->setId(14);
        $main14->setPricePlat(10);
        $main14->setImagePlat('../../resources/assets/img/dessert2.jpg');
        $main14->setLibelleplat('Cottage cheese with couli');
        $main14->setDetailsPlat('5min');
        $main14->setQtePlat(0);
        $main14->setIngredients('aaaa');
        $main14->setTypePlat('dessert');

        $main15 = new Plat();
        $main15->setId(15);
        $main15->setPricePlat(10);
        $main15->setImagePlat('../../resources/assets/img/dessert3.jpg');
        $main15->setLibelleplat('Cottage cheese with couli');
        $main15->setDetailsPlat('5min');
        $main15->setQtePlat(0);
        $main15->setIngredients('aaaa');
        $main15->setTypePlat('dessert');

        $main16 = new Plat();
        $main16 ->setId(16);
        $main16 ->setPricePlat(10);
        $main16 ->setImagePlat('../../resources/assets/img/salad1.jpg');
        $main16 ->setLibelleplat('Cottage cheese with couli');
        $main16 ->setDetailsPlat('5min');
        $main16 ->setQtePlat(0);
        $main16 ->setIngredients('aaaa');
        $main16 ->setTypePlat('salad');

        $main17 = new Plat();
        $main17->setId(17);
        $main17->setPricePlat(10);
        $main17->setImagePlat('../../resources/assets/img/salad2.jpg');
        $main17->setLibelleplat('Cottage cheese with couli');
        $main17->setDetailsPlat('5min');
        $main17->setQtePlat(0);
        $main17->setIngredients('aaaa');
        $main17->setTypePlat('salad');

        $main18 = new Plat();
        $main18->setId(18);
        $main18->setPricePlat(10);
        $main18->setImagePlat('../../resources/assets/img/salad3.jpg');
        $main18->setLibelleplat('Cottage cheese with couli');
        $main18->setDetailsPlat('5min');
        $main18->setQtePlat(0);
        $main18->setIngredients('aaaa');
        $main18->setTypePlat('salad');

        $myArray = array();
        array_push($myArray,$main1);
        array_push($myArray,$main2);
        array_push($myArray,$main3);
        array_push($myArray,$main4);
        array_push($myArray,$sauce1);
        array_push($myArray,$sauce2);
        array_push($myArray, $main5);
        array_push($myArray, $main6);
        array_push($myArray, $main7);
        array_push($myArray, $main8);
        array_push($myArray, $main9);
        array_push($myArray, $main10);
        array_push($myArray, $main11);
        array_push($myArray, $main12);
        array_push($myArray, $main13);
        array_push($myArray, $main14);
        array_push($myArray, $main15);
        array_push($myArray, $main16);
        array_push($myArray, $main17);
        array_push($myArray, $main18);

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
    public function getPlatByName($name,$plats){
        error_log('existe:ok');
        $myArray = array();
        foreach ($plats as $plat):
            if(str_contains($plat->getLibelleplat(),$name)){
                error_log('existe:oui');
                array_push($myArray,$plat);
            }else{
                error_log('existe:non');
            }
        endforeach;
        return $myArray;
    }


}
?>
