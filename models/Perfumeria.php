<?php
//models/Perfumeria.php 
class Perfumeria extends Model{
    public function getTodos(){
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND c.nombre = 'Perfumeria'");
        return $this->db->fetchAll();
    }
}