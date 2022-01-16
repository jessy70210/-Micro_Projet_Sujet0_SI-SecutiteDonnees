<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
    @font-face {
        font-family: 'Cera-Pro' ;
        src: url("../../resources/font/Cera-Pro.otf");
    }
    body{
        background-color: whitesmoke;
        font-family:"Cera-Pro",Serif;
    }
    .cards2 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 2rem;
        margin: 4rem 5vw;
        padding: 0;
        list-style-type: none;
        border: 0px solid rgba(0,0,0,.125);
    }

    .card2 {
        position: relative;
        display: block;
        width:50%;
        height: 10%;
        border-radius: 10%;
        overflow: hidden;
        text-decoration: none;
        border: 0px solid rgba(0,0,0,.125);
        object-fit: contain;
        float:left;
        padding:0;
    }

    .card__image2 {
        width: 80%;
        height: 80%;
        border-radius: 50%;
        margin-left:80px


    }



    /* The container */
    .container {
        display: block;
        position: absolute;
        padding-left: 30px;
        margin-bottom: 12px;
        margin-top:30%;
        left:6%;
        cursor: pointer;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 65px;
        width: 65px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #E85852FF;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 16px;
        top: 5px;
        width: 35px;
        height: 40px;
        border: solid white;
        border-width: 0 9px 9px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);

    }


    .item2 {
        position:relative;
        padding-bottom:90px;
        padding-top:40px;
        border-radius: 50%;

    }
    .notify-badge2{
        position: relative;
        right:-110%;
        top:20px;
        width:25px;
        height:25px;
        background:#E85852FF;
        text-align: center;
        border-radius: 40%;
        color:white;
        padding:20px 30px 20px 30px;
        font-size:40px;
        margin:5px;
        margin-bottom:20px;

    }

    .button {
        position: relative;
        background-color: #E85852FF;
        border: none;
        font-size: 28px;
        color: #FFFFFF;
        padding: 20px;
        width: 200px;
        text-align: center;
        transition-duration: 0.4s;
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
        float:left;
        margin-top:5%;

        border-radius:20%;


    }

    .button:after {
        content: "";
        background: #f1f1f1;
        display: block;
        position: absolute;
        padding-top: 300%;
        padding-left: 350%;
        margin-left: -20px !important;
        margin-top: -120%;
        opacity: 0;
        transition: all 0.8s
    }

    .button:active:after {
        padding: 0;
        margin: 0;
        opacity: 1;
        transition: 0s
    }
    .details-plat{
        display: flex;
        justify-content: space-between;
    }
    .plat-qte{
        margin-right: 5%;
        vertical-align: top;
        display: inline-block;
        text-align: center;
        background-color: #E85852FF;
        height: 150px;
        width: 70px;
        padding-top: 2%;
        margin-bottom: 3%;
        border-radius: 50px;
    }
    .plat-qte img{
        background-color: white;
        border-radius: 50px;
        padding: 10px
    }
    .header-commande{

        margin-left:5%;
        color:#444444;

        font-weight:bold;
    }
    .box i{

        background-color:white;
        cursor: pointer;
        display: inline-block;
        height: 120%;
        width: 70%;
        align-items: center;
        text-align: center;
        border-radius: 20px;
        padding-top: 5%;
        padding-bottom: 5%;
        box-shadow: 5px 5px 5px 5px  grey;

    }

    .box p{
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        font-style: italic;
    }
    .box img{
        margin-right: 5%;
    }

    a, a:hover, a:active{
        color: black;
        text-decoration: none;
    }
    .header-icon{
          margin-top: 7%;
        margin-left: 3%;
    }
    .command-footer{

        background-color:white;
        border-top-left-radius: 80px 80px;
        border-top-right-radius: 80px 80px;
        width: 100%;
        height: 100%;
        margin-left: 1%;
        padding-right: 10%;
        padding-bottom: 20%;
        padding-top: 3%;
    }
    .command-footer p{
        margin-left: 10%;
    }
    .command-footer span{

    }
    .checkout {
        text-align: center;
        margin-bottom: 5%;

    }
    .checkout button{
        background-color: #E85852FF;
        font-size: 64px;
        font-weight: bold;
        border-radius: 50px;
        color:white;
        position: fixed;
        bottom: 1%;
        left: 30%;
        padding-left: 5%;
        padding-right: 5%;


    }
    .header-nav a{
        font-weight: bold;
        font-size: 32px;
        border-bottom: 5px solid #E85852FF;
        padding-bottom: 1px
        color: black;
    }
    .header-nav a:hover{
        color: black;
    }
    .box p{
        position: absolute;
        top:70%;
        left:8%;
    }
</style>



<body>
<div class="col-md-12  d-flex justify-content-between header-icon">

        <div class="box">
           <div class="col-md-2" >
               <img src="../../resources/logo/intro.png" style="width: 200px;"></div>
                <p>Saf<span style="color:#E85852FF ">E</span>at</p>
        </div>

    <div class="col-md-2">
        <div class="box">
            <a href="?controller=Menu"><i class="fas fa-chevron-left fa-4x"></i></a>
        </div>
    </div>
</div>
<!--<div class="header-commande">
    <h1 >
        Checkout your order<span class="wave" style="font-size:65px">💸</span><span class="wave" style="font-size:65px">💳</span>
    </h1>
    <h1 >
        <span>And you will receive your delicious food very quickly 😋</span>
    </h1>
</div>-->
<div class="header-nav">
    <div class="d-flex justify-content-around">
        <a>Checkout</a>
        <a>Done order</a>
    </div>
</div>
<ul class="cards2">
    <?php
    $a=count($_SESSION['myData']) ;

    for ($i=0;$i<$a;$i++){
        echo '
    <div style="border-radius: 15%;background-color:white;border: 0px solid rgba(0,0,0,0); float:right">
        <li>
            <a href="" class="card2">
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <img src="'.$_SESSION['myData'][$i]['imagePlat'].'" class="card__image2" alt=""  />
            </a>
            <div style="padding-top:13%">
                <p style="color:#444444;font-size:35px;margin-top:-90px;margin-bottom:0px" >'.$_SESSION['myData'][$i]['libelleplat'].'</p>
             <div class="details-plat">
                <p  style="font-weight:bold;font-size:45px;">'.$_SESSION['myData'][$i]['pricePlat'].'<span style="font-size:35px ; color:#E85852FF">$</span> </p>
                 <div class="plat-qte">
                    <img  src="../../resources/assets/img/group.png" >
                    <div class="icon-caption"><b>0'.$_SESSION['myData'][$i]['qtePlat'].'<br/>People</b></div>
                </div>
                </div> 
                <div class="card"></div>
            </div>
           
        </li>
    </div>';
    }
    ?>
    <!--<div style="border-radius: 10%;background-color:white;border: 0px solid rgba(0,0,0,0); float:right">
        <li>
            <a href="" class="card2">
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <img src="assets/img/2.jpg" class="card__image2" alt=""  />
            </a>
            <div style="padding-top:13%">
                <p style="color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold ;font-size:35px;margin-top:0px;margin-bottom:0px" >Poitrine de poulet grillée </p>
                <p style="font-weight:bold;font-size:45px;font-family:Comic Sans MS, Comic Sans, cursive;margin-top:10px">852<span style="font-size:35px ; color:#f0bf3c">$ </span> </p>
                <div class="card"  > </div>
            </div>
        </li>
    </div>
    <div style="border-radius: 10%;background-color:white;border: 0px solid rgba(0,0,0,0); float:right">
        <li>
            <a href="" class="card2">
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <img src="assets/img/2.jpg" class="card__image2" alt=""  />
            </a>
            <div style="padding-top:13%">
                <p style="color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold ;font-size:35px;margin-top:0px;margin-bottom:0px" >Poitrine de poulet grillée </p>
                <p style="font-weight:bold;font-size:45px;font-family:Comic Sans MS, Comic Sans, cursive;margin-top:10px">852<span style="font-size:35px ; color:#f0bf3c">$ </span> </p>
                <div class="card"  > </div>
            </div>
        </li>
    </div>
    <div style="border-radius: 10%;background-color:white;border: 0px solid rgba(0,0,0,0); float:right">
        <li>
            <a href="" class="card2">
                <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <img src="assets/img/2.jpg" class="card__image2" alt=""  />
            </a>
            <div style="padding-top:13%">
                <p style="color:#444444; font-family:Comic Sans MS , Comic Sans, cursive; font-weight:bold ;font-size:35px;margin-top:0px;margin-bottom:0px" >Poitrine de poulet grillée </p>
                <p style="font-weight:bold;font-size:45px;font-family:Comic Sans MS, Comic Sans, cursive;margin-top:10px">852<span style="font-size:35px ; color:#f0bf3c">$ </span> </p>
                <div class="card"  > </div>
            </div>
        </li>
    </div>-->

</ul>

<div class="checkout">
    <button type="button" class="btn btn-rounded"><a href="?controller=Payement">Checkout</a></button>
</div>

</body>
<script src="https://www.w3schools.com/lib/w3.js"></script>
</html>
