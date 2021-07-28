<?php
//models/Bebes.php 
class Bebes extends Model{
    public function getTodos(){
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND c.nombre = 'Bebes'");
        return $this->db->fetchAll();
    }
}