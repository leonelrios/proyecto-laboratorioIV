<?php
//controllers/limpieza.php
require '../fw/fw.php';
require '../models/Limpieza.php';
require '../views/ListadoProductos.php';

$b = new Limpieza();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();