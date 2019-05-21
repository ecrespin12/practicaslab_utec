<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Laboratorio_api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model("m_admin/LaboratorioModel");
    }

    public function listLaboratorios_get()
    {
        //ponemos lo que venga de los filtros;
        $edificio_fil = 0;
        $acronimo_fil = '';
        $filas_fil = 0;
        $columnas_fil = 0;
        $nombre_fil = '';
        $altitud_fil = 0;
        $longitud_fil = 0;
        $data = array(
            'cod' => 0,
            'codedf' => $edificio_fil,
            'acr' => $acronimo_fil,
            'fil' => $filas_fil,
            'col' => $columnas_fil,
            'al' => $altitud_fil,
            'lo' => $longitud_fil,
            'nom' => $nombre_fil,
        );
        $this->response($this->LaboratorioModel->getListaLaboratorios($data));
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
            'cod' => $codigo,
            'codedf' => $codEdificio,
            'acr' => $acronimo,
            'fil' => $filas,
            'col' => $columnas,
            'al' => $altitud,
            'lo' => $longitud,
            'nom' => $nombre,
        );
        if ($this->LaboratorioModel->guardarDatos($codigo, $data))
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
            'cod' => $codigo,
            'codedf' => 0,
            'acr' => '',
            'fil' => 0,
            'col' => 0,
            'al' => 0,
            'lo' => 0,
            'nom' => '',
        );

        if ($this->LaboratorioModel->borrarDatos($data))
            $this->response(array('status' => 'Eliminado con exito'));
        else
            $this->response(array('status' => 'fallo'));
    }

    public function crearActualizarMaquinas($codlab)
    {
        $data = array(
            'cod' => $codlab,
            'codedf' => 0,
            'acr' => '',
            'fil' => 0,
            'col' => 0,
            'al' => 0,
            'lo' => 0,
            'nom' => '',
        );
        $lab = $this->LaboratorioModel->getListaLaboratorios($data);
        for ($i = 1; $i <= $lab->$lab_filas[0]; $i++) { 
            for ($i=0; $i < $lab->$lab_columnas[0]; $i++) { 
                
            }
        }
    }
}
