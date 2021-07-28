<?php
//controllers/bebidas.php
require '../fw/fw.php';
require '../models/Bebidas.php';
require '../views/ListadoProductos.php';

$b = new Bebidas();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();