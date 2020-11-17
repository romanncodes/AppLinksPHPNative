<?php

use models\LinksModel as LinksModel;

session_start();
require_once("../models/LinksModel.php");
if (isset($_SESSION['usuario'])) {
    $model = new LinksModel();
    $links = $model->getAllLinksByEmail($_SESSION['usuario']['email']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="grey lighten-4">

    <?php

    if (isset($_SESSION['usuario'])) { ?>
        <nav class="blue-grey darken-4">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <img width="20" src="https://www.lupusresearch.org/wp-content/uploads/2017/09/resource-links-icon.png" alt="">
                    Bienvenido <?= $_SESSION['usuario']['nombre'] ?></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="nuevo_link.php">Nuevo Link</a></li>
                    <li class="active"><a href="mislinks.php">Mis Links</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </div>

        </nav>
        <!-- NAV MOVIL-->
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="data:image/jpeg;base64,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">
                    </div>
                    <a href="#user"><img class="circle" src="https://0.academia-photos.com/6714991/9272071/10336266/s200_walter.white.jpg"></a>
                    <a href="#name"><span class="white-text name">John Doe</span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <li><a href="nuevo_link.php">Nuevo Link</a></li>
            <li class="active"><a href="mislinks.php">Mis Links</a></li>
            <li><a href="salir.php">Salir</a></li>
        </ul>


        <!--  FIN DEL NAV--->

        <div class="container">
            <div class="row">
                <?php foreach ($links as $link) { ?>
                    <div class="col l4 m4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSgmwkfrWqbvcNKtA8zXuzSrl_SyVuVd7VQRw&usqp=CAU">
                                <span class="card-title"><?= $link['nombre'] ?></span>
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a target="_BLANK" href="<?= $link['link'] ?>">Ir a la Página</a>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>







    <?php } else { ?>
        <h3 class="red-text">Error de Acceso</h3>
        <p>
            Usted no tiene permisos para estar aqui
            <br>
            <a href="../index.php">Home</a>
        </p>

    <?php  } ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>
</body>

</html>