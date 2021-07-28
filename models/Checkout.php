<?php
//models/Checkout.php 
class Checkout extends Model{
    public function insert($name, $email, $phone, $address){
        $name = $this->db->escape($name);
        $name = $this->db->escapeWildcards($name);
        $email = $this->db->escape($email);
        $email = $this->db->escapeWildcards($email);
        $address = $this->db->escape($address);
        $address = $this->db->escapeWildcards($address);

        session_start();
        $p = $_SESSION["carro"];
        $total = 0;
        foreach($p as $x => $val) { 
            global $total;
            $total = $total + ($val['precio'] * $val['cantidad']);
        }
        $datetime = date("c");
        $this->db->insert("INSERT INTO pedidos(nombre_cliente, tel_cliente, email_cliente, direccion_cliente, fecha, total_pedido) 
        VALUES('$name', '$phone', '$email', '$address', '$datetime', $total)");
        $this->db->query("SELECT id_pedidos FROM pedidos p WHERE fecha = '$datetime'");
        $resultado = $this->db->fetch();
        $id_pedido = $resultado['id_pedidos'];
        $this->db->insert("INSERT INTO estado_pedido(id_pedidos, estado) VALUES($id_pedido, FALSE)");
    
        foreach($p as $x => $val) {
            $id_producto = (int)$val['id'];
            $cantidad = (int)$val['cantidad'];
            $total = $cantidad * $val['precio'];      
            $this->db->insert("INSERT INTO producto_pedido(id_producto, id_pedido, cantidad, total) 
                                VALUES($id_producto, $id_pedido, $cantidad, $total)");

        }
        unset($_SESSION["carro"]);
        header("Location: ../postcompra");
    }
}