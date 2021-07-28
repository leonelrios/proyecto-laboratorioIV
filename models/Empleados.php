<?php
//models/Empleados.php 
class Empleados extends Model{
    public function getPedidos(){
        session_start();
        if($_SESSION["login"] == false){
            header("Location: ./login");
        }
        $this->db->query("SELECT DISTINCT p.*, ep.estado, ep.id_empleado FROM pedidos p, estado_pedido ep, empleados e
            WHERE p.id_pedidos = ep.id_pedidos GROUP BY p.id_pedidos");
        $resultado = $this->db->fetchAll();
        return $resultado;  
    }

    public function changeEstado($id_pedido, $id_empleado){
        $this->db->insert("UPDATE estado_pedido SET estado = TRUE, id_empleado = $id_empleado WHERE id_pedidos = $id_pedido");
        header("Location: ../empleados");
    }
}