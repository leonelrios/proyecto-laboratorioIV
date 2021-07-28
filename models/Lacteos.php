<?php
//models/Lacteos.php 
class Lacteos extends Model{
    public function getTodos(){
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND c.nombre = 'Lacteos'");
        return $this->db->fetchAll();
    }
}