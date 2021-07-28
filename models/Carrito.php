<?php
//models/Carrito.php 
class Carrito extends Model{
    public function getTodos(){
        session_start();
        if(isset($_SESSION["carro"])){
            $p = $_SESSION["carro"];
            return $p;  
        }
    }
    
    public function insertar($id){
        session_start(); 
        $this->db->query("SELECT p.* FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND p.id_producto = $id");
        $resultado = $this->db->fetch();
        $p = $_SESSION["carro"];
        $flag = 0;
        foreach($p as $x => $val) {
            if($val['id'] === $id){
                $val['cantidad'] = $val['cantidad'] + 1;
                $_SESSION["carro"][$x] = $val;
                global $flag;
                $flag = 1;
            } 
        }
        if($flag === 0){
            $_SESSION["carro"][]=array('id'=>$resultado['id_producto'],'nombre'=>$resultado['nombre'],'cantidad'=>1,'precio'=>(float)$resultado['precio']);        
        }
        header("Location: ../categorias");
    }

    public function sumar($id){
        session_start();
        $p = $_SESSION["carro"];
        foreach($p as $x => $val) {
                if($val['id'] == $id){
                    $val['cantidad'] = $val['cantidad'] + 1;
                    $_SESSION["carro"][$x] = $val;
                }     
        }
        header("Location: ../carrito");
    }

    public function restar($id){
        session_start();
        $p = $_SESSION["carro"];
        foreach($p as $x => $val) {
            if($val['id'] == $id && $val['cantidad'] > 1){
                $val['cantidad'] = $val['cantidad'] - 1;
                $_SESSION["carro"][$x] = $val;
            } else if($val['id'] == $id && $val['cantidad'] == 1){
                $carrito = array_filter($p, function($v) use ($id){
                    return $v['id'] != $id;
                });
                $_SESSION["carro"] = $carrito;
            }
        }
        header("Location: ../carrito");
    }
}