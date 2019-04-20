<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("CategoriaModel");
	}

	public function index()
	{
		$data = array(
			'listadoCategorias' => $this->CategoriaModel->listCategorias() , 
		);

		//Mostrar las views
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/categorias/list_cat', $data);
		$this->load->view('layouts/footer');
	}

	public function formCategoria()
	{
				//Mostrar las views
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside');
				$this->load->view('layouts/nav');
				$this->load->view('admin/categorias/add_cat');
				$this->load->view('layouts/footer');
	}

	public function addCategoria()
	{

		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$estado = $this->input->post("estado");

		//la variable estado viene como una cadena, si es on u vacia
		
		$data = array(
			'cat_nombre' => $nombre,
			'cat_descripcion' => $descripcion, 
			'cat_estado'=> "1" 
		);

		if($this->CategoriaModel->insertCategoria($data))
			redirect(base_url()."productos/categorias");
		else 
			redirect(base_url()."productos/categorias/registrar");

			/* 
				TODO:falta validar el ingreso de datos a nivel de backend
				TODO: falta mandar mensajes al usuario interactivo para ver si se guardo o no:ALERTAS
			*/
	}

	public function editCategoria($id)
	{
			$data = array(
				'categoria' => $this->CategoriaModel->getCategoria($id) , 
			);
				//Mostrar las views
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside');
				$this->load->view('layouts/nav');
				$this->load->view('admin/categorias/edit_cat', $data);
				$this->load->view('layouts/footer');
	}

	public function updateCategoria()
	{

		$categoriaID = $this->input->post("idCategoria");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$estado = $this->input->post("estado");

		$data = array(
			'cat_nombre' => $nombre,
			'cat_descripcion'=> $descripcion,
		 );

		 if ($this->CategoriaModel->updateCategoria($categoriaID, $data)) {
			redirect(base_url()."productos/categorias");
		 }else{
			redirect(base_url()."productos/categorias/editar/".$categoriaID);
		 }
	}

	public function viewCategoria($id){

		$data = array(
			'categoria' => $this->CategoriaModel->getCategoria($id) , 
		);
		$this->load->view('admin/categorias/view_cat', $data);
	}

	public function deleteCategoria($id){
		
		$data = array(
			'cat_estado' => "0",
		 );
		 $this->CategoriaModel->updateCategoria($id, $data);
		echo "categorias";
	
	}


}
