<?php
//controllers/empleados.php
require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/MenuEmpleados.php';

$e = new Empleados();
$pedidos = $e->getPedidos();

$v = new MenuEmpleados();
$v->pedidos = $pedidos;
$v->render();