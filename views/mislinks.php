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
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="grey lighten-4">

    <?php

    if (isset($_SESSION['usuario'])) { ?>
        <nav class="blue-grey darken-4">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img width="20" src="https://www.lupusresearch.org/wp-content/uploads/2017/09/resource-links-icon.png" alt="">
                    Bienvenido <?= $_SESSION['usuario']['nombre'] ?></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="nuevo_link.php">Nuevo Link</a></li>
                    <li class="active"><a href="mislinks.php">Mis Links</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </div>
        </nav>

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
</body>

</html>