<?php
//controllers/frutas.php
require '../fw/fw.php';
require '../models/Frutas.php';
require '../views/ListadoProductos.php';

$b = new Frutas();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();