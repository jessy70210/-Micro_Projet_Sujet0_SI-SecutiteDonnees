<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script href="assets/boostrap/js/style.js"></script>

</head>

<body >
<style>
    :root {
        --surface-color: #fff;
        --curve: 40;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Noto Sans JP', sans-serif;
        background-color: whitesmoke;

    }

    .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 20rem 5vw;
        padding: 0;
        list-style-type: none;
        border: 0px solid rgba(0,0,0,.125);

    }

    .card {
        position: relative;
        display: inline-block;
        width:100%;
        height: 100%;
        border-radius: 10%;
        overflow: hidden;
        text-decoration: none;
        border: 0px solid rgba(0,0,0,.125);
        object-fit: contain;
    }

    .card__image {
        width: 100%;
        height: 100%;
        border-radius:50%;

    }

    .card__overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        border-radius: calc(var(--curve) * 1px);
        background-color: var(--surface-color);
        transform: translateY(100%);
        transition: .2s ease-in-out;
    }

    .card:hover .card__overlay {
        transform: translateY(0);
    }

    .card__header {
        position: relative;
        display: flex;
        align-items: center;
        gap: 2em;
        padding: 2em;
        border-radius: calc(var(--curve) * 1px) 0 0 0;
        background-color: var(--surface-color);
        transform: translateY(-100%);
        transition: .2s ease-in-out;
    }

    .card__arc {
        width: 80px;
        height: 80px;
        position: absolute;
        bottom: 100%;
        right: 0;
        z-index: 1;
    }

    .card__arc path {
        fill: var(--surface-color);
        d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
    }

    .card:hover .card__header {
        transform: translateY(0);
    }

    .card__thumb {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .card__title {
        font-size: 30px;
        margin: 0 0 .3em;
        color: #6A515E;
        font-style: oblique 40deg;
    }

    .card__tagline {
        display: block;
        margin: 1em 0;
        font-family: "MockFlowFont";
        font-size: .8em;
        color: #D7BDCA;
    }

    .card__status {
        font-size: 30px;
        color: black;
        font-weight:bold;
        font-style: oblique 40deg;
    }

    .card__description {
        padding: 0 2em 2em;
        margin: 0;
        color: #D7BDCA;
        font-family: "MockFlowFont";
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }





    *
    {
        outline: none;
    }





    .tb
    {
        display: table;
        width: 100%;
    }

    .td
    {
        display: table-cell;
        vertical-align: middle;
    }

    input, button
    {
        color: #fff;
        font-family: Nunito;
        padding: 0;
        margin: 0;
        border: 0;
        background-color: transparent;
    }

    #cover
    {

        margin-top:10px;
        margin-left:-10%;


        width: 120%;
        padding: 30px;

        background-color: #ff241f;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(232,88,82,100), 0 0 0 20px #ffffffeb;
        transform: scale(0.6);
    }

    form
    {
        height: 96px;
    }

    input[type="text"]
    {
        width: 100%;
        height: 96px;
        font-size: 60px;
        line-height: 1;
    }

    input[type="text"]::placeholder
    {
        color: white;
    }

    #s-cover
    {
        width: 1px;
        padding-left: 35px;
    }

    button
    {
        position: relative;
        display: block;
        width: 84px;
        height: 96px;
        cursor: pointer;
    }

    #s-circle
    {
        position: relative;
        top: -8px;
        left: 0;
        width: 63px;
        height: 63px;
        margin-top: 0;
        border-width: 15px;
        border: 15px solid #fff;
        background-color: transparent;
        border-radius: 50%;
        transition: 0.5s ease all;
    }

    button span
    {
        position: absolute;
        top: 68px;
        left: 30px;
        display: block;
        width: 45px;
        height: 15px;
        background-color: transparent;
        border-radius: 10px;
        transform: rotateZ(52deg);
        transition: 0.5s ease all;
    }

    button span:before, button span:after
    {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 45px;
        height: 15px;
        background-color: #fff;
        border-radius: 10px;
        transform: rotateZ(0);
        transition: 0.5s ease all;
    }

    #s-cover:hover #s-circle
    {
        top: -1px;
        width: 67px;
        height: 15px;
        border-width: 0;
        background-color: #fff;
        border-radius: 20px;
    }

    #s-cover:hover span
    {
        top: 50%;
        left: 56px;
        width: 25px;
        margin-top: -9px;
        transform: rotateZ(0);
    }

    #s-cover:hover button span:before
    {
        bottom: 11px;
        transform: rotateZ(52deg);
    }

    #s-cover:hover button span:after
    {
        bottom: -11px;
        transform: rotateZ(-52deg);
    }
    #s-cover:hover button span:before, #s-cover:hover button span:after
    {
        right: -6px;
        width: 40px;
        background-color: #fff;
    }

    #ytd-url {
        display: block;
        position: fixed;
        right: 0;
        bottom: 0;
        padding: 10px 14px;
        margin: 20px;
        color: #fff;
        font-family: Nunito;
        font-size: 14px;
        text-decoration: none;
        background-color: #ff241f;
        border-radius: 4px;
        box-shadow: 0 10px 20px -5px rgba(255, 117, 117, 0.86);
        z-index: 125;
    }



    /**************************************** fatimazahra*/

    nav{

        margin-left: 250px;
        margin-bottom: 20px;
        border-radius: 50px;
        font-family: cursive;

    }
    .btn-toolbar{
        position: absolute;
        left:180px;
        margin-bottom: 15px;
        margin-top: 20px;
    }

    nav img{
        width:100%;
        height: 100%;
    }
    .btn-group {
        background-color: #ff241f ;
        cursor: pointer;
        display: inline-block;
        align-items: center;
        width: 100px;
        height: 150px;
        padding-top: 35px;
        font:50px/1 Arial, sans-serif;
        text-align: center;
        border-radius: 60px;
        margin-left:20px;
        box-shadow: 5px 5px 5px darkgray;


    }
    .btn-group img{
        width: 64px;
        height: 64px;
    }

    .title{
        font-size:28px;
        font-weight: bold;
        text-align:center;
        font-family: cursive;
        display: block;

    }

    span.wave {
        animation-name: wave-animation;
        animation-duration: 2.5s;
        animation-iteration-count: infinite;
        transform-origin: 70% 70%;
        display: inline-block;
    }

    @keyframes wave-animation {
        0% { transform: rotate(  0.0deg); }
        10% { transform: rotate(-10.0deg); }
        20% { transform: rotate( 12.0deg); }
        30% { transform: rotate(-10.0deg); }
        40% { transform: rotate(  9.0deg); }
        50% { transform: rotate(  0.0deg); }
        100% { transform: rotate(  0.0deg); }
    }


    .badge {
        background: radial-gradient( 5px -9px, circle, white 8%, red 26px );
        background-color: red;
        border: 2px solid white;
        border-radius: 50%; /* one half of ( (border * 2) + height + padding ) */
        box-shadow: 1px 1px 1px black;
        color: white;
        font: bold 15px/13px Helvetica, Verdana, Tahoma;
        height: 106px;
        min-width: 108px;
        padding: 1px 3px 0 3px;
        text-align:center;
        margin-top:20px;
        margin-left:20px;

    }





    .item {
        position:relative;
        padding-bottom:90px;
        padding-top:40px;
        border-radius: 50%;

    }
    .notify-badge{
        position: relative;
        right:-30px;
        top:20px;
        width:25px;
        height:25px;
        background:red;
        text-align: center;
        border-radius: 50%;
        color:white;
        padding:40px 10px 40px 10px;
        font-size:30px;
        margin:25px;
        margin-bottom:20px;
        font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold
    }
    .welcome-msg{
        text-align: justify;
        margin-left: 14.5%;
    }
    .box1{
        margin-top: 30%;
        background-color:white;
        cursor: pointer;
        display: inline-block;
        height: 40%;
        width: 55%;
        align-items: center;
        text-align: center;
        border-radius: 20px;
        padding-top: 5%;

        box-shadow: 5px 5px 5px  darkgray;
    }
    .box1 span{
        background-color:  #ff241f;
        position: absolute;
        top:15%;
        right:30%;
        font-size: 25px;
        font-family: cursive;
        font-weight: bold;
        width: 20%;
        height: 20%;

    }
    a{
        color:black;
    }
    .img-text{

    }
    .cart-icon{
        margin-left: 10%;
    }
    .plat{
        border-radius: 10%;
        background-color:white;
        border: 0px solid rgba(0,0,0,0);
        box-shadow: 5px 5px 5px  darkgray;

    }
    .plat:hover{
        box-shadow: 10px 10px 10px  darkgray;
    }
    .box img{
        width: 200px;
    }



</style>
<div class="col-md-12 container d-flex justify-content-between img-text">
    <div class="col-md-2 " >
        <div class="box">
            <img src="../../resources/logo/intro.png"/>
      </div>
    </div>
    <div class="col-md-2">
        <div class="box1 cart-icon">
            <a href="?controller=Commande"><i class="fas fa-shopping-bag fa-3x"></i></a>
            <span class="translate-middle  rounded-pill" id="qte"><?php if(intval($qte)!=0) echo $qte;?></span>
        </div>
    </div>
</div>
<div class="navbar-collapse collapse " id="collapsingNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <i  class="fa fa-2x fa-cart-plus wow fadeIn " ></i>
        </li>
    </ul>
</div>
<div class="welcome-msg">
    <h1 style="color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold ">
        Hello client !<span class="wave">👋</span><span class="wave">👋</span>
    </h1>
    <h1 style="color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold ">
        Welcome to our restaurant <span>❤️ </span>
    </h1>
</div>


<div id="cover">
    <form method="get" action="">
        <div class="tb">
            <div class="td"><input type="text" placeholder="Search" required></div>
            <div class="td" id="s-cover">
                <button type="submit">
                    <div id="s-circle"></div>
                    <span></span>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div  role="group" aria-label="first group">
        <a href="?controller=Menu&type=salad" class="btn-group" id="saladdiv" onclick="setColor('salad');">
            <img id="saladimg" src="../../resources/assets/img/salad.png" alt="..."  >
        </a>
        <h1 class="title">Starters</h1>
    </div>
    <div  role="group" aria-label="Second group" >
        <a href="?controller=Menu&type=main" class="btn-group" id="maindiv" onclick="setColor('main');">
            <img id="mainimg"  src="../../resources/assets/img/steak.png" alt="..." >
        </a>
        <div class="title"style="text-align:center" >Main<br/>Courses</div>
    </div>
    <div role="group" aria-label="Third group" >

        <a href="?controller=Menu&type=dessert" class="btn-group" id="dessertdiv" onclick="setColor('dessert');">
            <img  id="dessertimg" src="../../resources/assets/img/cake.png" alt="..." />
        </a>
        <div class="title">Desserts</div>
    </div>
    <div  role="group" aria-label="fourth group" >
        <a href="?controller=Menu&type=drink" class="btn-group" id="drinkdiv"  onclick="setColor('drink');">
            <img  id="drinkimg" src="../../resources/assets/img/cocktail.png" alt="..." />
        </a>
        <div class="title">Drinks</div>

    </div>
    <div role="group" aria-label="five group" >

        <a href="?controller=Menu&type=sauce" class="btn-group"  id="saucediv" onclick="setColor('sauce');">
            <img  id="sauceimg" src="../../resources/assets/img/sauces.png" alt="..." />
        </a>
        <div class="title">Sauces</div>
    </div>
</div>


<ul class="cards">
    <?php
    foreach ($platsFiltres as $plat):
        echo '
            <div class="plat">
                <li>
                    <a href="?controller=PlatDetails&id='.$plat->getId().'&qte=&nb=0" class="card">
                        <img src="'.$plat->getImagePlat().'" class="card__image" alt=""  />
                    </a>
                </li>
                <h2 style="text-align: center;color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold " >Poitrine de poulet grillée</h2>
                <h1 style="text-align: center;"><span style="font-weight:bold;font-size:45px;font-family:Comic Sans MS, Comic Sans, cursive">852 </span><span style="font-size:35px ; color:rgba(232,88,82,100)">$ </span></h1>
                <h1 style="text-align: center;color:#999999"><span> <img src="../../resources/assets/img/time.png" style="width:10%;height:10%;"  /></span><span style="font-weight:bold;font-size:20px;padding-top:10%"> 30 min </span></h1>
        
            </div>';
    endforeach;
    ?>

    <!--<div style="border-radius: 10%;background-color:white;border: 0px solid rgba(0,0,0,0);">
        <li>
            <a href="" class="card">
                <img src="../../resources/assets/img/2.jpg" class="card__image" alt=""  />
            </a>
      </li>
        <h2 style="text-align: center;color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold " >Poitrine de poulet grillée</h2>

        <h1 style="text-align: center;"><span style="font-weight:bold;font-size:45px;font-family:Comic Sans MS, Comic Sans, cursive">852 </span><span style="font-size:35px ; color:rgba(232,88,82,100)">$ </span></h1>
        <h1 style="text-align: center;color:#999999"><span> <img src="../../resources/assets/img/time.png" style="width:10%;height:10%;"  /></span><span style="font-weight:bold;font-size:20px;padding-top:10%"> 30 min </span></h1>

    </div>
    <div style="border-radius: 10%;background-color:white;border: 0px solid rgba(0,0,0,0);">
        <li>
            <a href="" class="card">
                <img src="../../resources/assets/img/2.jpg" class="card__image" alt=""  />
            </a>

        </li>
        <h2 style="text-align: center;color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold " >Poitrine de poulet grillée</h2>

        <h1 style="text-align: center;"><span style="font-weight:bold;font-size:45px;font-family:Comic Sans MS, Comic Sans, cursive">852 </span><span style="font-size:35px ; color:rgba(232,88,82,100)">$ </span></h1>
        <h1 style="text-align: center;color:#999999"><span> <img src="../../resources/assets/img/time.png" style="width:10%;height:10%;"  /></span><span style="font-weight:bold;font-size:20px;padding-top:10%"> 30 min </span></h1>

    </div>

    <div style="border-radius: 10%;background-color:white;border: 0px solid rgba(0,0,0,0);">
        <li>
            <a href="platt" class="card">
                <img src="../../resources/assets/img/2.jpg" class="card__image" alt="" id="plat" />
            </a>

        </li>
        <h2 style="text-align: center;color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold " >Poitrine de poulet grillée</h2>

        <h1 style="text-align: center;"><span style="font-weight:bold;font-size:45px;font-family:Comic Sans MS, Comic Sans, cursive">852 </span><span style="font-size:35px ; color:rgba(232,88,82,100)">$ </span></h1>
        <h1 style="text-align: center;color:#999999"><span> <img src="../../resources/assets/img/time.png" style="width:10%;height:10%;"  /></span><span style="font-weight:bold;font-size:20px;padding-top:10%"> 30 min </span></h1>

    </div>-->
</ul>
<script type="text/javascript">
    document.addEventListener('load',setColor('<?php echo $type;?>'));
    function deleteColor(id){
        var property = document.getElementById(id+"div");
        var propertyImg = document.getElementById(id+"img");

        switch(id){
            case 'salad':
                property.style.backgroundColor = "#ff241f";
                propertyImg.src = "../../resources/assets/img/salad.png";
                break;

            case 'main':

                property.style.backgroundColor = "#ff241f";
                propertyImg.src = "../../resources/assets/img/steak.png";
                break;

            case 'dessert':
                property.style.backgroundColor = "#ff241f";
                propertyImg.src = "../../resources/assets/img/cake.png";
                break;
            case 'drink':
                property.style.backgroundColor = "#ff241f";
                propertyImg.src = "../../resources/assets/img/cocktail.png";
                break;
            case 'sauce':
                property.style.backgroundColor = "#ff241f";
                propertyImg.src = "../../resources/assets/img/sauces.png";
                break;
        }
    }
    function setColor(id) {
        var property = document.getElementById(id+"div");
        var propertyImg = document.getElementById(id+"img");
        switch(id){
            case 'salad':
                for (let i = 1; i <=5; i++) {
                    if(i!=1)
                        deleteColor(i);
                }

                property.style.backgroundColor = "white";
                propertyImg.src = "../../resources/assets/img/saladColor.png";
                break;

            case 'main':
                for (let i = 1; i <=5; i++) {
                    if(i!=2)
                        deleteColor(i);
                }
                property.style.backgroundColor = "white";
                propertyImg.src = "../../resources/assets/img/steakColor.png";

                break;


            case 'dessert':
                for (let i = 1; i <=5; i++) {
                    if(i!=3)
                        deleteColor(i);
                }
                property.style.backgroundColor = "white";
                propertyImg.src = "../../resources/assets/img/cakeColor.png";
                break;
            case 'drink':
                for (let i = 1; i <=5; i++) {
                    if(i!=4)
                        deleteColor(i);
                }
                property.style.backgroundColor = "white";
                propertyImg.src = "../../resources/assets/img/cocktailColor.png";
                break;
            case 'sauce':
                for (let i = 1; i <=5; i++) {
                    if(i!=5)
                        deleteColor(i);
                }
                property.style.backgroundColor = "white";
                propertyImg.src = "../../resources/assets/img/sauceColor.png";
                break;
        }


    }
</script>
</body>

</html>

