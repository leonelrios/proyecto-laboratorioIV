<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Pedido</title>
    <link rel="stylesheet" href="./html/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

        <h3 class="center">Pedido <?= $_GET['id'] ?></h3>
        <div class="col s12 m6 offset-m3">
                <table>
                    <thead>
                        <tr>
                            <th>ID-Producto</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <?php
                        $total = 0;
                        foreach($this->pedido as $p) { 
                        $total = $total + ($p['cantidad'] * $p['precio']);?>

                    <tbody>
                        <tr>
                            <td><?= $p['id_producto'] ?></td>
                            <td><?= $p['nombre'] ?></td>
                            <td>$<?= $p['precio'] ?></td>
                            <td><?= $p['cantidad'] ?></td>
                            <td>$<?= $p['cantidad'] * $p['precio']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h5 class="center-align">Precio Final: $<?= $total ?></h5>
        </div>
        <div class="row">
            <div class="col s-12">
                <a href="empleados" class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">arrow_back</i>VOLVER</a>
            </div>
        </div>
    
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>