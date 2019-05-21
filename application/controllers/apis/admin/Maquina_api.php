<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Maquina_api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model("m_admin/MaquinaModel");
    }

    public function listMaquinas_get()
    {
        //ponemos lo que venga de los filtros;
        $codlab = 0;
        $fil = 0;
        $col = 0;
        $est = '';
        $ere = '';
        $ali = '';
        $data = array(
            'codlab' => $codlab,
            'fil' => $fil,
            'col' => $col,
            'est' => $est,
            'ere' => $ere,
            'ali' => $ali,  
        );
        $this->response($this->MaquinaModel->getListaMaquinas($data));
    }

    public function guardarDatos_post()
    {
        //recibir los names de input desde la vista por post
        $codigo = $this->input->post("txtCodigo");
        $codEdificio = $this->input->post("ddlEdificio");
        $acronimo = $this->input->post("txtAcronimo");
        $filas = $this->input->post("txtFilas");
        $columnas = $this->input->post("txtColumnas");
        $nombre = $this->input->post("txtNombre");
        $altitud = $this->input->post("txtAltitud");
        $longitud = $this->input->post("txtLongitud");

        //mandar los input a arreglo y campos de la bd
        $data = array(
            'codlab' => $codigo,
            'fil' => $fil,
            'col' => $col,
            'est' => $est,
            'ere' => $ere,
            'ali' => $ali,            
        );
        if ($this->MaquinaModel->guardarDatos($codigo, $data))
            $this->response(array('status' => 'Registro se guardo correctamente'));
        else
            $this->response(array('status' => 'fallo'));
    }


    // este verbo si hace un delete como tal en la bd, en nuestros cruds no se va a eliminar info pero dejo el metodo de ejemplo
    // implementado  por si algun requerimeinto lo america utilizar

    function borrarDatos_delete()
    {
        //recibir los names de input desde la vista por post
        $codigo = $this->input->delete("txtCodigo");

        //mandar los input a arreglo y campos de la bd
        $data = array(
            'codlab' => $codlab,
            'fil' => $fil,
            'col' => $col,
            'est' => $est,
            'ere' => $ere,
            'ali' => $ali,  
        );

        if ($this->MaquinaModel->borrarDatos($data))
            $this->response(array('status' => 'Eliminado con exito'));
        else
            $this->response(array('status' => 'fallo'));
    }    
}
