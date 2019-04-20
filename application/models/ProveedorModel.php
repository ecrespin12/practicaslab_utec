<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProveedorModel extends CI_Model {

    public function listProveedores(){

        $this->db->where("prv_estado", "1");
        $result = $this->db->get("proveedores");

        return $result->result();
    }

    public function getProveedor($id)
    {
        $this->db->where("proveedorID", $id);          
        $result = $this->db->get("proveedores");
        return $result->row();
    }

    public function insertProveedor($data)
    {
        return $this->db->insert("proveedores", $data);
    }

    
    public function updateProveedor($id, $data){

        $this->db->where("proveedorID", $id);
        return $this->db->update("proveedores", $data);
    }
  
}