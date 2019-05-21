<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Edificio_api extends REST_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->database();
        $this->load->model("m_admin/EdificioModel");
    }

    public function listEdificios_get()
    {
        //ponemos lo que venga de los filtros;
        $nombre_fil = '';
        $acronimo_fil = '';
        $estado_fil = '';
        $data = array(
            'cod' => 0,
            'nom' => $nombre_fil,
            'acr' => $acronimo_fil,
            'est' => $estado_fil,
        );
        $this->response($this->EdificioModel->getListaEdificios($data));
    }

    // public function insertEdificio_post() {

    //     //recibir los names de input desde la vista por post
    // 	$nombre = $this->input->post("txtNombre");
    // 	$acronimo = $this->input->post("txtAcronimo");

    // 	//mandar los input a arreglo y campos de la bd
    // 	$data = array(
    // 		'edf_nombre' => $nombre ,
    // 		'edf_acronimo' => $acronimo ,
    // 	 );

    //     if($this->EdificioModel->insertEdificio($data))
    //         $this->response(array('status' => 'Registro se guardo correctamente'));
    //     else 
    //         $this->response(array('status' => 'fallo'));
    // }

    // function updateEdificio_put() {
    //     $codigo = $this->put("txtCodigo");
    //     $nombre = $this->put("txtNombre");
    // 	$acronimo = $this->put("txtAcronimo");

    // 	//mandar los input a arreglo y campos de la bd
    // 	$data = array(
    //         'edf_codigo' => $codigo ,
    // 		'edf_nombre' => $nombre,
    // 		'edf_acronimo' => $acronimo ,
    // 	 );

    //     if($this->EdificioModel->updateEdificio($data))
    //         $this->response(array('status' => 'Registro actualizado correctamente'));
    //     else 
    //         $this->response(array('status' => 'fallo'));
    // }

    public function guardarDatos_post()
    {
        //recibir los names de input desde la vista por post
        $codigo = $this->input->post("txtCodigo");
        $nombre = $this->input->post("txtNombre");
        $acronimo = $this->input->post("txtAcronimo");
        $estado = $this->input->post("ddlEstado");

        //mandar los input a arreglo y campos de la bd
        $data = array(
            'cod' => $codigo,
            'nom' => $nombre,
            'acr' => $acronimo,
            'est' => $estado,
        );
        if ($this->EdificioModel->guardarDatos($codigo, $data))
            $this->response(array('status' => 'Registro se guardo correctamente'));
        else
            $this->response(array('status' => 'fallo'));
    }


    // este verbo si hace un delete como tal en la bd, en nuestros cruds no se va a eliminar info pero dejo el metodo de ejemplo
    // implementado  por si algun requerimeinto lo america utilizar

    function borrarDatos_delete()
    {
        //recibir los names de input desde la vista por post
        $codigo = $this->input->post("txtCodigo");

        //mandar los input a arreglo y campos de la bd
        $data = array(
            'cod' =>  $codigo,
            'nom' => '',
            'acr' => '',
            'est' => '',
        );

        if ($this->EdificioModel->borrarDatos($data))
            $this->response(array('status' => 'Eliminado con exito'));
        else
            $this->response(array('status' => 'fallo'));
    }
}
