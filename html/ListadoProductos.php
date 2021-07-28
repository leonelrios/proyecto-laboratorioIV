<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="./html/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        h2{
            margin-bottom: 40px;
            margin-top: 75px;
        }
    
        .producto{
            width: 50px;
            height: 200px;
            padding: 10px;
        }

        .card p{
            font-size: 16px;
        }

        .boton{
            margin: 0px !important;
        }

        .boton-volver{
            
        }
        
    </style>
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

        <h2 class="center-align">Listado de Productos</h2>

        <div class="row">
            <?php foreach($this->productos as $p) { ?>
                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                        <img class="producto" src="./html/img/<?=$p['nombre']?>.jpg" alt=""/>
                        </div>
                        <div class="card-content">
                        <p class="center-align"><?= $p['nombre'] ?></p>
                        <p class="center-align"><?= '$' . $p['precio'] ?></p>
                        </div>
                        <div class="card-action">
                        <p class="center-align">
                            <a href="producto-<?= $p['id_producto'] ?>" class="boton waves-effect waves-light btn-small grey darken-3">Ver Producto</a>
                        </p>
                        
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
            
            <p class="center-align">
                <a href="categorias" class="boton-volver waves-effect waves-light btn-large red lighten-1">Volver a las categorias</a>
            </p>
        
       

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>