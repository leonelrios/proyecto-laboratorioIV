<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Carrito</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./html/css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .total{
            font-weight: bold;
            font-size:22px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .icon{
            line-height: 40px !important;
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
            
    
        <div class="row black-text">
            <h1 class="center-align">
                <?php if(!isset($_SESSION["carro"])){
                    echo 'Carrito Vacio';
                    return null;
                }else{
                    echo 'Carrito';
                } ?>
            </h1>
            <div class="col s12 m6 offset-m3">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <?php 
                            foreach($this->productos as $p) {  
                            $this->total = $this->total + ($p['precio'] * $p['cantidad'] );
        
                        ?>

                    <tbody>
                        <tr>
                            <td><?= $p['nombre'] ?></td>
                            <td><?= $p['cantidad'] ?></td>
                            <td>$<?= $p['precio'] ?></td>
                            <td>   
                                <a href="./controllers/sumaCarrito.php?id=<?= $p['id'] ?>" class="waves-effect waves-light btn green accent-4"><i class="tiny material-icons icon">add_circle</i></a>
                                <a href="./controllers/restaCarrito.php?id=<?= $p['id'] ?>" class="waves-effect waves-light btn red accent-4"><i class="tiny material-icons icon">remove</i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                <p class="total center-align">Total: $<?=$this->total ?></p>
                <p class="center-align">
                    <a href="checkout" class="btn-large btn-block grey darken-4">Checkout</a>
                </p>
        
            </div>
        </div>
    </div>

</body>
</html>