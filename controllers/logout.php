<?php
//controllers/logout.php
require '../fw/fw.php';
require '../models/Logout.php';

$b = new Logout();
$b->logout();