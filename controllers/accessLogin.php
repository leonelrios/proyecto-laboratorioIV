<?php
//controllers/accessLogin.php
require '../fw/fw.php';
require '../models/Login.php';

if(!isset($_POST['email']))die("error-email1");
if(strlen($_POST['email'])<10) die("error-email2");
if(strlen($_POST['email'])>30) die("error-email3");
$email = $_POST['email'];
if(!isset($_POST['password']))die("error-password4");
if(strlen($_POST['password'])<4) die("error-password5");
if(strlen($_POST['password'])>15) die("error-password6");
$password = $_POST['password'];

$l = new Login();
$l->login($email, $password);
