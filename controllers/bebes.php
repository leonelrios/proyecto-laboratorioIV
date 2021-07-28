<?php
//controllers/bebes.php
require '../fw/fw.php';
require '../models/Bebes.php';
require '../views/ListadoProductos.php';

$b = new Bebes();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();