<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrecioModel extends CI_Model {

    // select p.pro_nombre, pv.pve_precioVenta, i.sucursalID from productos p
    // inner join productos_ingresos pi
    // on p.productoID= pi.productoID
    // inner join preciosventas_ingresosproductos pvi
    // on pi.productoIngresoID = pvi.productoIngresoID
    // inner join precios_ventas pv
    // on pv.precioVentaID = pvi.precioVentaID
    // inner join ingresos i
    // on i.ingresoID=pi.ingresoID
    // group by p.pro_nombre, pv.pve_precioVenta, i.sucursalID
    //C
    public function listPrecioProductos(){

        $this->db->select("p.pro_nombre, pv.pve_precioVenta, i.sucursalID");
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