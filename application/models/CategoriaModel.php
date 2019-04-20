<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaModel extends CI_Model {

    public function listCategorias(){

        $this->db->where("cat_estado", "1");
        $result = $this->db->get("categorias");

        return $result->result();
    }

    public function getCategoria($id)
    {
        $this->db->where("categoriaID", $id);          
        $result = $this->db->get("categorias");
        return $result->row();
    }

    public function insertCategoria($data)
    {
        return $this->db->insert("categorias", $data);
    }

    
    public function updateCategoria($id, $data){

        $this->db->where("categoriaID", $id);
        return $this->db->update("categorias", $data);
    }
  
}