<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./html/css/styles.css">
    <style>
        .producto{
            width: 100%;
            padding: 80px;
        }

        h4{
            margin-top: 100px;
        }

        .precio{
            font-size: 25px;
            margin-top: 50px;
        }

        .boton-add{
            margin-top: 50px;
        }

    </style>
</head>
<body>
    <?php
        $p = $this->producto;
    ?>
    
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

            <div class="col s6 m6">
                <img class="producto" src="./html/img/<?=$p['nombre']?>.jpg" alt=""/>
            </div>

            <div class="col s6 m6"> 
                <h4 class="center-align"><?= $p['nombre'] ?></h4>
                <p class="center-align precio"><?= '$' . $p['precio'] ?></p>
                <a href="./controllers/addCarrito.php?id=<?= $p['id_producto'] ?>"
                   class="boton-add waves-effect waves-light btn-large btn-block col s4 m4 offset-m4 offset-s4">Agregar<i class="material-icons right">add_shopping_cart</i></a>
            </div>

            


        </div>

    </div>

    
</body>
</html>