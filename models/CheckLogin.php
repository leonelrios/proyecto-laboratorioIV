<?php
//models/CheckLogin.php
class CheckLogin extends Model{
    public function checkLogin(){ 
        session_start();
        if (isset($_SESSION["login"])) {
            if($_SESSION["login"] === true){
                header("Location: empleados");
            }
        }     
    }
}