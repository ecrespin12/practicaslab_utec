<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class TipoUsuario_api extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model("m_admin/TipoUsuarioModel");
    }

    public function listTiposUsuarios_get()
    {
        //ponemos lo que venga de los filtros;
        $nombre_fil = '';        
        $data = array(
            'cod' => 0,
            'nom' => $nombre_fil,            
        );
        $this->response($this->TipoUsuarioModel->getListaTipoUsuarios($data));
    }

    public function guardarDatos_post()
    {
        //recibir los names de input desde la vista por post
        $codigo = $this->input->post("txtCodigo");
        $nombre = $this->input->post("txtNombre");

        //mandar los input a arreglo y campos de la bd
        $data = array(
            'cod' => $codigo,
            'nom' => $nombre,
        );
        if ($this->TipoUsuarioModel->guardarDatos($codigo, $data))
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
        );

        if ($this->TipoUsuarioModel->borrarDatos($data))
            $this->response(array('status' => 'Eliminado con exito'));
        else
            $this->response(array('status' => 'fallo'));
    }
}
