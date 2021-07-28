<?php
//controllers/pescados.php
require '../fw/fw.php';
require '../models/Pescados.php';
require '../views/ListadoProductos.php';

$b = new Pescados();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();