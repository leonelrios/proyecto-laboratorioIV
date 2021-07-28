<?php
//controllers/addCarrito.php
require '../fw/fw.php';
require '../models/Carrito.php';
require '../views/ListadoCarrito.php';

$id = $_GET['id'];

$add = new Carrito();
$add->insertar($id);