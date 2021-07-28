<?php
//models/Limpieza.php 
class Limpieza extends Model{
    public function getTodos(){
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND c.nombre = 'Limpieza'");
        return $this->db->fetchAll();
    }
}