<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Empleados</title>
    <link rel="stylesheet" href="./html/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .logout{
            font-size: 1.2rem;
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
        <div class="row">
            <div class="col s12 right-align">
                <h5 class="mt-3">Bienvenido <span class="light-blue-text darken-4"><?= $_SESSION["empleado"]['nombre']?></span></h5>
                <a href="./controllers/logout.php" class="red-text darken-4 logout"><i class="bi bi-box-arrow-left"></i> Cerrar Sesion</a>
            </div>
        </div>
        <h2 class="center">Pedidos</h2>
        <div class="col s12 m6 offset-m3">
                <table>
                    <thead>
                        <tr>
                            <th>ID-Pedido</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Empleado</th>
                            <th>Productos</th>
                        </tr>
                    </thead>
                    <?php
                        foreach($this->pedidos as $p) { ?>

                    <tbody>
                        <tr>
                            <td><?= $p['id_pedidos'] ?></td>
                            <td><?= $p['nombre_cliente'] ?></td>
                            <td><?= $p['tel_cliente'] ?></td>
                            <td><?= $p['email_cliente'] ?></td>
                            <td><?= $p['direccion_cliente'] ?></td>
                            <td><?= $p['fecha'] ?></td>
                            <td>$<?= $p['total_pedido'] ?></td>
                            <td>
                                <?php 
                                    if ($p['estado'] == 0)
                                        echo '<button><a class="waves-effect waves-light btn red lighten-2" href="./controllers/confirmPedido.php?id='.$p['id_pedidos'].'&empleado='.$_SESSION["empleado"]['id_empleado'].'">En Proceso</a></button>';
                                    else{
                                        echo '<button onClick="confirmado()"><a class="waves-effect waves-light btn red lighten-2 green lighten-1" href="#">Confirmado</a></button>';
                                    }
                                ?>
                            </td>
                            <td>
                                <?php 
                                    if ($p['id_empleado'] == 0)
                                        echo '-';
                                    else{
                                        echo $_SESSION["empleado"]['nombre'];
                                    }
                                ?>
                            </td>
                            <td>
                                <a href=<?='pedido-'.$p['id_pedidos']?> class="btn-small waves-effect waves-light grey darken-3">LISTADO
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
    <script>
        function confirmado(){
            Swal.fire({
                icon: 'success',
                title: 'El pedido ya fue confirmado',
                showConfirmButton: false,
                timer: 2000
            })
        }
    </script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>