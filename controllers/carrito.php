<?php
//controllers/carrito.php
require '../fw/fw.php';
require '../models/Carrito.php';
require '../views/ListadoCarrito.php';

$c = new Carrito();
$todos = $c->getTodos();

$v = new ListadoCarrito();
$v->productos = $todos;
$v->render();