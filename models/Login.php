<?php
//models/Login.php 
class Login extends Model{
    public function login($email, $password){
        $email = $this->db->escape($email);
        $email = $this->db->escapeWildcards($email);
        $password = $this->db->escape($password);
        $password = $this->db->escapeWildcards($password);
        session_start();
        $_SESSION["login"] = false;
        $this->db->query("SELECT e.id_empleado, e.nombre FROM empleados e WHERE e.email = '$email' AND e.password = '$password'");
        $resultado = $this->db->fetch();
        if($resultado){
            $_SESSION["login"] = true;
            $_SESSION["empleado"] = $resultado;
            header("Location: ../empleados");
        }else{
            header("Location: ../login");
        }
    }
}