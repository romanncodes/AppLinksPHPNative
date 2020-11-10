<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Links</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col l4 m4 s12 red">

            </div>
            <div class="col l4 m4 s12 center">
                <img width="80" src="https://www.lupusresearch.org/wp-content/uploads/2017/09/resource-links-icon.png" alt="">
                <h3 class="center">App Links</h3>
                <h6 class="center">Guarda tus páginas Web</h6>


                <p class="red-text">
                    <?php
                    session_start();
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }


                    ?>
                </p>

                <form action="controllers/LoginController.php" method="POST">
                    <div class="input-field">
                        <input id="email" type="email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input id="clave" type="password" name="clave">
                        <label for="clave">Clave</label>
                    </div>
                    <button class="btn black ancho-100">Iniciar Sesion</button>

                    <p class="center">
                        <a href="registro.php">¿No tienes Cuenta? Registrate aquí</a>
                    </p>

                </form>
            </div>






        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>