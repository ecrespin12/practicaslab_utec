<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VentaModel extends CI_Model {

    public function getComprobantes()
    {
        $result =$this->db->get("comprobantes");
        return $result->result();
    }

    public function listPreciosProductos(){

        $this->db->select("p.productoID, p.pro_nombre, pv.pve_precioVenta, pv.pve_stockVenta, pv.pve_aplicaDescuento, pv.pve_precioDescuento, i.sucursalID");
        $this->db->from("productos p");
        $this->db->join("productos_ingresos pi", "p.productoID=pi.productoID"); 
        $this->db->join("preciosventas_ingresosproductos pvi","pi.productoIngresoID=pvi.productoIngresoID");
        $this->db->join("precios_ventas pv","pv.precioVentaID=pvi.precioVentaID");
        $this->db->join("ingresos i","i.ingresoID=pi.ingresoID");
        $this->db->where("pv.pve_estado", "1");
        $this->db->group_by("p.pro_nombre, pv.pve_precioVenta, i.sucursalID");
        $result = $this->db->get();

        return $result->result();
    }

    // public function listCargos(){

    //     $this->db->where("car_estado", "1");
    //     $result = $this->db->get("cargos");

    //     return $result->result();
    // }

    // public function getCargo($id)
    // {
    //     $this->db->where("cargoID", $id);          
    //     $result = $this->db->get("cargos");
    //     return $result->row();
    // }

    // public function insertCategoria($data)
    // {
    //     // return $this->db->insert("categorias", $data);
    // }

    
    // public function updateCategoria($id, $data){

    //     // $this->db->where("categoriaID", $id);
    //     // return $this->db->update("categorias", $data);
    // }
  
}