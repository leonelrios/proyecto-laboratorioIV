<?php
//controllers/electro.php
require '../fw/fw.php';
require '../models/Electro.php';
require '../views/ListadoProductos.php';

$b = new Electro();
$todos = $b->getTodos();

$v = new ListadoProductos();
$v->productos = $todos;
$v->render();