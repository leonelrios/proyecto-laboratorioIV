<?php
//models/Logout.php 
class Logout extends Model{
    public function logout(){
        session_start();
        $_SESSION["login"] = false;
        unset($_SESSION["empleado"]);
        header("Location: ../home");
    }
}