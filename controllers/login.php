<?php
//controllers/login.php
require '../fw/fw.php';
require '../models/CheckLogin.php';
require '../views/Login.php';

$b = new CheckLogin();
$b->checkLogin();

$v = new Login();
$v->render();