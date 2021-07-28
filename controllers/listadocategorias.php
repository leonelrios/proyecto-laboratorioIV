<?php
//controllers/listadocategorias.php
require '../fw/fw.php';
require '../models/Categorias.php';
require '../views/ListadoCategorias.php';

$c = new Categorias();
$todos = $c->getTodos();

$v = new ListadoCategorias();
$v->categorias = $todos;
$v->render();