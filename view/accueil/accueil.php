<!--<div class="container h-100 d-flex flex-column justify-content-around">-->
<!--    <div class="row m-5">-->
<!--        <div class="col-6 offset-3 ">-->
<!--            <h1 class="text-white font-pacifico text-center">Restaurant</h1>-->
<!--            <h3 class="text-white font-pacifico text-center">A la bonne heure</h3>-->
<!--            <div class="text-center"><img height="100" width="auto" src="../../resources/img/logo.png" alt="Logo Restaurant"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row m-4">-->
<!--        <p class="text-white text-center fs-1">Bienvenu sur notre application<br>Grâce à notre service de menu diginal vous pouvez consulté, commandé le menu et surtout profité. Il est l'heure de passer à table</p>-->
<!--    </div>-->
<!--    <div class="fixed-bottom m-5">-->
<!--        <div class="text-center row m-1">-->
<!--            <a href="#" class="btn btn-outline-light">-->
<!--                Passer une commande-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="text-center row m-1">-->
<!--            <a href="#" class="btn btn-outline-light">-->
<!--                Voir le menu-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="text-center row m-1">-->
<!--            <a href="http://www.google.fr" class="btn btn-outline-light">-->
<!--                Rejoindre une commande-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<div class="container h-100 d-flex flex-column justify-content-around">-->
<!--    <div class="row m-4">-->
<!--        <div class="col ">-->
<!--            <div class="text-center">-->
<!--                <p><br><br></p>-->
<!--                <img height="150" width="auto" src="../../resources/img/logo4.jpg" alt="Logo Restaurant">-->
<!--                <h2 class="font-pacifico"><br><br>Welcome dear customer</h2>-->
<!--                <h4 class="font-pacifico"><br> --><?php //$table =1;
	//                    echo $table; ?><!--</h4>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    --><?php //if (strcmp("A problem has arisen", $table)) echo "
	//    <div class='fixed-bottom m-5'>
	//        <div class='text-center row m-1'>
	//            <a href='http://www.google.fr'  class='btn btn-outline-warning'>
	//                I want to order
	//            </a>
	//        </div>
	//    </div>"
	//    ?>
<!--</div>-->

<div class="container h-100 d-flex flex-column justify-content-around ">
    <div class="row">
        <div class="text-center">
            <img height="250" width="auto" src="../../resources/logo/intro.png" alt="Logo Restaurant">
        </div>
        <h2 class="text-center text-white">Welcome</h2>
        <?php
            if (strcmp("A problem has arisen", $table)) {
                $_SESSION['num_table'] = $table;
                ?>
            <h3 class="text-center text-white">Have a sit on table number <?php echo $table; ?></h3>
            <h4 class="text-center text-white">Please check your table number</h4>
            <p><br></p>
            <div>
                <button type="button" onclick="window.location='/?controller=Menu'" class="btn btn-light btn-rounded">Start your order</button>
            </div>
        <?php } else { ?>
            <h3 class="text-center text-white"><?php echo $table; ?></h3>
            <h4 class="text-center text-white">We are really sorry</h4>
            <p><br></p>
            <div>
                <button type="button" disabled="disabled" class="btn btn-light btn-rounded ">Start your order</button>
            </div>
        <?php } ?>
    </div>
</div>