<?php
//controllers/producto.php
require '../fw/fw.php';
require '../models/Producto.php';
require '../views/DetalleProducto.php';

$id = $_GET['id'];

$b = new Producto();
$p = $b->getProducto($id);

$v = new DetalleProducto();
$v->producto = $p;
$v->render();