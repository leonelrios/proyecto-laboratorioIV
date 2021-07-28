<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./html/css/styles.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="nav-wrapper red lighten-1">
                <a href="./home" class="brand-logo"><img src="./html/img/logo.png" alt="logo" class="logo"/></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="./home">Home</a></li>
                    <li><a href="./categorias">Categorias</a></li>
                    <li><a href="./carrito"><i class="material-icons">shopping_cart</i></a></li>
                    <li><a href="./login">Empleados</a></li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <form action="./controllers/endCheckout.php" method="POST" class="col s6 offset-s3">
                <div class="row">
                    <h3 class="center">Complete sus datos</h3>
                    <div class="input-field col s6">
                        <input id="name" name="name" type="text" class="validate" maxlength='20'>
                        <label for="name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="phone" name="phone" type="text" class="validate">
                        <label for="phone">Telefono</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="address" name="address" type="text" class="validate">
                        <label for="address">Direccion</label>
                    </div>
                </div>
                <input value="Comprar" type="submit" class="btn-large btn-block grey darken-4 col s12"/>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>