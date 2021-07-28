<?php
//models/detallePedidos.php
class detallePedidos extends Model{
    public function getTodos($id){
        session_start();
        if($_SESSION["login"] == false){
            header("Location: ./login");
        }
        $this->db->query("SELECT p.*, pp.cantidad FROM productos p, producto_pedido pp WHERE p.id_producto = pp.id_producto AND pp.id_pedido = $id");
        $resultado = $this->db->fetchAll();
        return $resultado;
    }
}