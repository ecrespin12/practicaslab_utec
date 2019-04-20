<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductoModel extends CI_Model {

    public function listProductos(){

        $this->db->select("p.*, c.cat_nombre");
        $this->db->from("productos p");
        $this->db->join("categorias c", "p.categoriaID=c.categoriaID"); 
        $this->db->where("p.pro_estado", "1");
        $result = $this->db->get();

        return $result->result();
    }

    public function getProducto($id)
    {
        $this->db->where("productoID", $id);          
        $result = $this->db->get("productos");
        return $result->row();
    }

    public function insertProducto($data)
    {
         return $this->db->insert("productos", $data);
    }
 
    public function updateProducto($id, $data){

        $this->db->where("productoID", $id);
        return $this->db->update("productos", $data);
    }
  
}