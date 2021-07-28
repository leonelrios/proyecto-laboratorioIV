<?php
//controllers/sumaCarrito.php
require '../fw/fw.php';
require '../models/Carrito.php';

$id = $_GET['id'];

$add = new Carrito();
$add->sumar($id);