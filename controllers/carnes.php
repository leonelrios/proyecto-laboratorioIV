<?php
//controllers/carnes.php
require '../fw/fw.php';
require '../models/Carnes.php';
require '../views/ListadoProductos.php';

$b = new Carnes();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();