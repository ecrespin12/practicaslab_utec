<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CargoModel extends CI_Model {

    public function listCargos(){

        $this->db->where("car_estado", "1");
        $result = $this->db->get("cargos");

        return $result->result();
    }

    public function getCargo($id)
    {
        $this->db->where("cargoID", $id);          
        $result = $this->db->get("cargos");
        return $result->row();
    }

    public function insertCategoria($data)
    {
        // return $this->db->insert("categorias", $data);
    }

    
    public function updateCategoria($id, $data){

        // $this->db->where("categoriaID", $id);
        // return $this->db->update("categorias", $data);
    }
  
}