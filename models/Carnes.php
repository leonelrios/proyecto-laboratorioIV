<?php
//models/Carnes.php 
class Carnes extends Model{
    public function getTodos(){
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND c.nombre = 'Carnes'");
        return $this->db->fetchAll();
    }
}