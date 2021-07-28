<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorias</title>
    <link rel="stylesheet" href="./html/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .titulo{
            margin-top: 100px;
        }
        
        .categorias{
            display: flex;
            justify-content: center;
        }

        .categorias a{
            margin-left: 10px;
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

        <h2 class="center-align titulo">Listado de categorias</h2>

        <div class="categorias">
            <?php foreach($this->categorias as $c) { ?>
                <a href="<?= strtolower($c['nombre'])?>" class="waves-effect waves-light btn-small grey darken-3"><i class="material-icons left">chevron_right</i><?= $c['nombre'] ?></a>
            <?php } ?>
        </div>

    </div>
</body>
</html>