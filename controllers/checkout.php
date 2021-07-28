<?php
//controllers/checkout.php
require '../fw/fw.php';
require '../views/Checkout.php';

$v = new Checkout();
$v->render();