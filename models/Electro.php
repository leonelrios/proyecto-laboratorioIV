<?php
//models/Electro.php 
class Electro extends Model{
    public function getTodos(){
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND c.nombre = 'Electro'");
        return $this->db->fetchAll();
    }
}