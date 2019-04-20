<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpleadoModel extends CI_Model {

    public function listEmpleados()
    {

        $this->db->select("e.*, c.car_nombre");
        $this->db->from("empleados e");
        $this->db->join("cargos c", "e.cargoID=c.cargoID"); 
        $this->db->where("e.emp_estado", "1");
        $result = $this->db->get();

        return $result->result();
    }

    public function getEmpleado($id)
    {
        $this->db->where("empleadoID", $id);          
        $result = $this->db->get("empleados");
        return $result->row();
    }

    public function insertEmpleado($data)
    {
        return $this->db->insert("empleados", $data);
    }
 
    public function updateProducto($id, $data){

        $this->db->where("empleadoID", $id);
        return $this->db->update("empleados", $data);
    }
  
}