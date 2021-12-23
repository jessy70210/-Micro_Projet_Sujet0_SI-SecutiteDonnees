<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark ">
    <a class="navbar-brand abs" href="#"><img src="../../resources/img/chef.png"> MyMenu</a>
    <button class="navbar-toggler" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse " id="collapsingNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">

                <div class="search">
                    <input type="text" class="input" placeholder="Chercher...">
                    <a class="nav-link nav-link-search" href="" data-target="#myModal" data-toggle="modal">
                        <i class="fa fa-2x fa-search wow fadeIn"></i>
                    </a>
                </div>

                <a class="nav-link" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    <i  class="fa fa-2x fa-cart-plus wow fadeIn " >

                    </i>
                    <span class="translate-middle badge rounded-pill bg-secondary">+2</span>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="media" style="position:relative;right:30px;">
                                    <div class="media-left">
                                        <a href="#" >
                                            <img class="media-object " src="../../resources/img/pla1.jpg" alt="..." >
                                        </a>
                                    </div>
                                    <div class="media-body"style="margin-top: 10px;">
                                        <p class="media-heading text-left">Plat 1<br/>Quantité:1</p>
                                        <button type="button" class="close ml-15" aria-label="Close">
                                            <span aria-hidden="true" class="btn-close">&times;</span>
                                        </button>
                                        <p class="media-heading text-left"></p>
                                        <div class="qte">
                                            <p class="media-heading text-left">20€</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" >
                                            <img class="media-object " src="../../resources/img/plat2.jpg" alt="..." >
                                        </a>

                                    </div>
                                    <div class="media-body ">
                                        <p class="media-heading text-left">Plat 1<br/>Quantité:1</p>
                                        <button type="button" class="close" aria-label="Close">
                                            <span aria-hidden="true" class="btn-close">&times;</span>
                                        </button>
                                        <p class="media-heading text-left"></p>
                                        <div class="qte">
                                            <p class="media-heading text-left">20€</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item-valid">
                                <p style="text-align: justify;margin: 10px;">Total : 40€</p>
                                <button type="button" class="btn-valid" >Valider Ma commande</button>
                            </li>
                        </ul>
                    </div>
                </a>

            </li>

        </ul>
    </div>
</nav>
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group mr-2" role="group" aria-label="First group">
        <button type="button" class="btn btn-secondary">Entrée</button>
    </div>
    <div class="btn-group mr-2" role="group" aria-label="Second group">
        <button type="button" class="btn btn-secondary">Plat</button>
    </div>
    <div class="btn-group mr-2" role="group" aria-label="Third group">
        <button type="button" class="btn btn-secondary">Dessert</button>
    </div>
    <div class="btn-group" role="group" aria-label="Third group">
        <button type="button" class="btn dropdown-toggle"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Boissons</a>
            <a class="dropdown-item" href="#">Suppléments</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 col-lg-5">

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="media">
                        <div class="media-left">
                            <a href="#" >
                                <img class="media-object " src="../../resources/img/pla1.jpg" alt="..." >
                            </a>
                        </div>
                        <div class="media-body ">
                            <h4 class="media-heading text-left">Plat 1</h4>
                            <div class="qte">
                                <h5 class="media-heading text-left">20€</h5>
                                <div class="qty">
                                    <span class="minus bg-dark" >-</span>
                                    <input type="number" class="count" name="qty" value="0">
                                    <span class="plus bg-dark" >+</span>
                                </div>
                            </div>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            <div class="add-menu">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="media">
                        <div class="media-left">
                            <a href="#" >
                                <img class="media-object " src="../../resources/img/plat2.jpg" alt="..." >
                            </a>
                        </div>
                        <div class="media-body ">
                            <h4 class="media-heading text-left">Plat 2</h4>
                            <div class="qte">
                                <h5 class="media-heading text-left">20€</h5>
                                <div class="qty">
                                    <span class="minus bg-dark" id="minus">-</span>
                                    <input type="number" id="countInput" class="count" name="qty" value="0">
                                    <span class="plus bg-dark" id="plus">+</span>
                                </div>
                            </div>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            <div class="add-menu">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="media">
                        <div class="media-left">
                            <a href="#" class="fill" >
                                <img class="media-object " src="../../resources/img/plat3.jpg" alt="..." >
                            </a>
                        </div>
                        <div class="media-body ">
                            <h4 class="media-heading text-left">Plat 3</h4>
                            <div class="qte">
                                <h5 class="media-heading text-left">20€</h5>
                                <div class="qty">
                                    <span class="minus bg-dark" id="minus">-</span>
                                    <input type="number"  class="count" name="qty" value="0">
                                    <span class="plus bg-dark">+</span>
                                </div>
                            </div>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            <div class="add-menu">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>

                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="pagination">
    <div class="btn-group mr-2 mt-2">
        <button class="btn btn-secondary" ><a href="#">1</a></button>
    </div>
    <div class="btn-group mr-2 mt-2">
        <button class="btn btn-secondary"><a href="#">2</a></button>
    </div>

</div>

<script src="../../resources/script/script.js" ></script>

</body>
</html>