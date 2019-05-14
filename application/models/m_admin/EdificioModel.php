<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EdificioModel extends CI_Model {

	public function listEdificios() { 
        $result = $this->db->query("CALL list_edificios_sp()");
        return $result->result();
    }

    public function insertEdificio($data){
        $stored_procedure = "CALL insert_edificios_sp(?,?)";
        $result = $this->db->query($stored_procedure, $data);
        return $result;
    }

    public function updateEdificio($data){
        $stored_procedure = "CALL update_edificios_sp(?,?,?)";
        $result = $this->db->query($stored_procedure, $data);
        return $result;
        
    }

    //Este no es un delete a la bd sino que update de estado: activo/inactivo
    public function deleteEdificio($data) {
        $stored_procedure = "CALL delete_edificios_sp(?)";
        $result = $this->db->query($stored_procedure, $data);
        return $result;
    }

}