<?php
//controllers/endCheckout.php
require '../fw/fw.php';
require '../models/Checkout.php';

if(!isset($_POST['name']))die("error-name1");
if(strlen($_POST['name'])<3) die("error-name2");
if(strlen($_POST['name'])>20) die("error-name3");
$name = $_POST['name'];
if(!isset($_POST['email']))die("error-email4");
if(strlen($_POST['email'])<10) die("error-email5");
if(strlen($_POST['email'])>30) die("error-email6");
$email = $_POST['email'];
if(!isset($_POST['phone']))die("error-phone7");
if(!is_numeric($_POST['phone']))die("error-phone8");
$phone = $_POST['phone'];
if(!isset($_POST['address']))die("error-address9");
if(strlen($_POST['address'])<5) die("error-address10");
if(strlen($_POST['address'])>30) die("error-address11");
$address = $_POST['address'];

$c = new Checkout();
$c->insert($name, $email, $phone, $address);