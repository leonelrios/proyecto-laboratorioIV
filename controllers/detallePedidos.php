<?php
//controllers/detallePedidos.php
require '../fw/fw.php';
require '../models/DetallePedidos.php';
require '../views/ListadoPedido.php';

$id = $_GET['id'];

$b = new DetallePedidos();
$todos = $b->getTodos($id);

$v = new ListadoPedido();
$v->pedido = $todos;
$v->render();