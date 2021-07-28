<?php
//controllers/restaCarrito.php
require '../fw/fw.php';
require '../models/Carrito.php';

$id = $_GET['id'];

$add = new Carrito();
$add->restar($id);