<?php
//controllers/confirmPedido.php
require '../fw/fw.php';
require '../models/Empleados.php';

$id_pedido = $_GET['id'];
$id_empleado = $_GET['empleado'];

$e = new Empleados();
$e->changeEstado($id_pedido, $id_empleado);