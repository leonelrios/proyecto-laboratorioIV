<?php
//controllers/lacteos.php
require '../fw/fw.php';
require '../models/Lacteos.php';
require '../views/ListadoProductos.php';

$b = new Lacteos();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();