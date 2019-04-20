<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteModel extends CI_Model {

    public function listClientes(){

        $this->db->where("cli_estado", "1");
        $result = $this->db->get("clientes");

        return $result->result();
    }

    public function getCliente($id)
    {
        $this->db->where("clienteID", $id);          
        $result = $this->db->get("clientes");
        return $result->row();
    }

    public function insertCliente($data)
    {
        return $this->db->insert("clientes", $data);
    }
    
    public function updateCliente($id, $data){

        $this->db->where("clienteID", $id);
        return $this->db->update("clientes", $data);
    }

    
  
}