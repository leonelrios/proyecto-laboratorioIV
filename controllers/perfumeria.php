<?php
//controllers/perfumeria.php
require '../fw/fw.php';
require '../models/Perfumeria.php';
require '../views/ListadoProductos.php';

$b = new Perfumeria();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();