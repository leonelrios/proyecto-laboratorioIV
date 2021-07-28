<?php
//models/Pescados.php 
class Producto extends Model{
    public function getProducto($id){
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND p.id_producto = $id");
        return $this->db->fetch();
    }
}