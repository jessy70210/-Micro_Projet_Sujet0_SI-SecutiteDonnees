
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

    <!-- Main Style CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
        height: 100%;

    }

    .card{

        margin:20px;
        border-radius: 50px;

    }
    .img-container{

        text-align: center;
        border-radius:50px;
        height: 900px;


    }
    .img-container img{
        width:100%;
        height:100%;
        border-top-left-radius: 50px 50px;
        border-top-right-radius: 50px 50px;
        background-color: #f0bf3c;z-index: 50;

    }
    .card-body{
        background-color: #f8f4f4;
        position: absolute;
        top:90%;
        width: 100%;
        border-radius: 60px ;
    }

    .box{
        margin-top: 10px;
        background-color:white;
        cursor: pointer;
        display: inline-block;
        height: 95%;
        width: 55%;
        align-items: center;
        text-align: center;
        border-radius: 20px;
        padding-top: 5%;
        box-shadow: 5px 5px 5px  darkgray;
    }
    input{
        border: 0;
        width: 2%;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .qty{
        position:absolute;
        top:-5%;
        left:40%;
        background-color:  #ff0921;
        border-radius: 50px;
        box-shadow: 10px 5px 5px darkgray;
        width: 200px;

    }
    .qty .count {
        color: #000;
        background-color:  #ff0921;
        display: inline-block;
        align-items: center;
        font-size: 50px;
        font-weight: 600;
        line-height: 50px;
        min-width: 50px;
        text-align: center;
    }
    .qty .plus {
        cursor: pointer;
        display: inline-block;
        align-items: center;
        color: black;
        margin-left:20px;
        width: 50px;
        height: 50px;
        font: 50px/1 Arial,sans-serif;



    }

    .qty .minus {

        cursor: pointer;
        display: inline-block;
        align-items: center;
        color: black;
        margin-left: 20px;
        margin-bottom: 10px;
        width: 50px;
        height: 50px;
        font: 50px/1 Arial,sans-serif;



    }
    .img-text{
        position: absolute;
        top:5%;
        margin-top: -25px;
    }
    .card-body-header{
        margin-top: 4%;
        font-weight: bold;
        font-family: cursive;

    }

    .icon-content{

    }

    .card-body-icon {
        vertical-align: top;
        display: inline-block;
        text-align: center;
        background-color:  #ff0921;
        height: 150px;
        width: 70px;
        padding-top: 2%;
        margin-left: 2%;
        border-radius: 50px;
        box-shadow: 10px 10px 10px darkgray;
    }
    .card-body-icon img{
        background-color: white;
        border-radius: 50px;
        padding: 10px;
    }
    .icon-caption{
        display: block;
        font-family: cursive;
        margin-top: 25%;
        font-size: 20px;
    }

    .cart-body-icons {
        position: relative;
        left:250px;

    }

    .cart-body-details{
        margin-top: 10%;
        font-weight: bold;
        font-family: cursive;
    }
    .cart-body-details p{
        display: block;
        font-family: cursive;
        font-size: 30px;
        color: grey;

    }
    .cart-body-ingredients{
        margin-top: 10%;
        font-family: cursive;
        font-size: 30px;
        font-weight: bold;
    }
    .ingredients-list {
        list-style: none;
    }
    .ingredients-list li::before {
        font-family: 'FontAwesome';
        content: '\2022 ';
        color:  #ff0921;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }
    .ingredients-list {
        margin-left: 25px;
    }
    .ingredient-qte{
        color:grey;
    }
    .add-dish{
        background-color: #ff3842 !important;
        cursor: pointer;
        display: inline-block;
        align-items: center;
        color: white;
        width: 150px;
        height: 150px;
        font: 150px/1 Arial,sans-serif;
        text-align: center;
        border-radius: 50%;
        color: black;
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
        -moz-box-shadow: 0 0 20px rgba(0,0,0,0.6);
        -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.6);
        -o-box-shadow: 0 0 20px rgba(0,0,0,0.6);
    }
    .add-container{
        position: relative;
        left: 40%;
        border-radius: 50%;
        bottom: 80%;
        color: white;




    }
    .add-container button{
        background: none;
        border: none;
    }
    .footer-add{
        height: 150px;
        position:relative;
        bottom:-20px;
        width: 104.5%;
        right:20px;
        border-radius: 60px;
        background-color: #f8f4f4;
        box-shadow: 0px 0px 0px darkgray, 0px -5px 5px darkgray;


    }
    .footer-add img{
        position: relative;
        top:25%;
        left:5%;

    }
    .box span{
        background-color:  #ff0921;
        position: absolute;
        top:0px;
        font-size: 25px;
        font-family: cursive;
        font-weight: bold;

    }
    .header-price span{
        color: #ff3842 ;
    }
    a{
        color: black;
    }






</style>
<form method="post" action="../../Micro_Projet_Sujet0_SI-SecutiteDonnees/controller/routeur.php?controller=controllerCommande&action=ajouterPlat">
    <input type="hidden"  name="id" size="12" maxlength="12" value="<?php echo $id; ?>">
    <div class="card" style="" >
        <div class="img-container">
            <div class="col-md-12 container d-flex justify-content-between img-text">
                <div class="col-md-2 " >
                    <div class="box">
                        <a href="../../Micro_Projet_Sujet0_SI-SecutiteDonnees/controller/routeur.php?controller=controllerMenu&action=listPlatByType&type=salad"><i class="fas fa-chevron-left fa-3x"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box">
                        <a href="../../Micro_Projet_Sujet0_SI-SecutiteDonnees/controller/routeur.php?controller=controllerCommande&action=afficherCommande"><i class="fas fa-shopping-bag fa-3x"></i></a>
                        <span class="translate-middle badge rounded-pill " id="qte"><?php echo $qte;?></span>
                    </div>
                </div>
            </div>
            <img class="card-img-top" src="<?php echo $platChoisi->getImagePlat(); ?>" alt="Card image cap">
        </div>
        <div class="card-body" >
            <div class="qty ">
                <span class="minus" >-</span>
                <input type="number" class="count" name="qty" value="0">
                <span class="plus" >+</span>
            </div>
            <div class="card-body-header d-flex justify-content-between ">
                <div class="header-title">
                    <h1 style="width:90%"><b><?php echo $platChoisi->getLibelleplat(); ?></b></h1>
                    <h4 style="color:grey;"><b>Dessert</b></h4>
                </div>
                <div class="header-price">
                    <h1><b>6.99<span>$</span></b></h1>
                </div>
            </div>

            <div class="cart-body-icons">
                <div class="container">
                    <div class="row">
                        <div class=" card-body-icon ">

                            <img  src="../../resources/assets/img/star.png">
                            <div class="icon-caption"><b>4.5</b></div>
                        </div>
                        <div class="card-body-icon">
                            <img  src="../../resources/assets/img/calories.png">
                            <div class="icon-caption"><b>103 Cal</b></div>
                        </div>
                        <div class=" card-body-icon">
                            <img  src="../../resources/assets/img/chronometre.png">
                            <div class="icon-caption"><b> 20<br/>min</b></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-body-details">
                <h1><b>Details</b></h1>
                <p>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                </p>
            </div>
            <div class="cart-body-ingredients">
                <h1><b>Ingredients</b></h1>
                <ul class="ingredients-list">
                    <li>2 <span class="ingredient-qte">eggs</span></li>
                    <li>1/2 <span class="ingredient-qte">cup flour</span></li>
                    <li>1/2  <span class="ingredient-qte">cup milk</span></li>
                    <li>2 <span class="ingredient-qte">tablespone butter</span></li>

                </ul>
            </div>
            <div class="footer-add">
                <img src="../../resources/assets/img/save-instagram.png"/>
                <div class="add-container" >
                    <button value="submit"><span class="add-dish">+</span></button>
                </div>
            </div>


        </div>

    </div>
</form>


<script type="text/javascript">

    var plus = document.getElementsByClassName("plus");
    var minus= document.getElementsByClassName("minus");
    var countInput=document.getElementsByClassName("count");
    var add_dish=document.getElementsByClassName("add-dish");
    var qte=document.getElementById("qte");
    var count=0;
    plus[0].onclick = function () {
        countInput[0].value =++count;
    };
    minus[0].onclick = function () {

        if(count==0){
            countInput[0].value =0;
        }else{
            countInput[0].value =--count;
        }
    };
    add_dish[0].onclick=function (){
        if(count>0)
            qte.innerHTML=count.toString();

    }

</script>

</body>
</html>