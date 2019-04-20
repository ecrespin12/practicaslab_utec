<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ProductoModel");
		$this->load->model("CategoriaModel");
	}

	public function index()
	{
		$data = array(
			'listadoProductos' => $this->ProductoModel->listProductos() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/productos/list_pro', $data);
		$this->load->view('layouts/footer');
	}


	public function formProducto()
	{
		$data = array(
			'listadoCategorias' => $this->CategoriaModel->listCategorias()
		);
		
		//Mostrar las views
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/productos/add_pro', $data);
		$this->load->view('layouts/footer');
	}

	public function addProducto()
	{
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$stockMinimo = $this->input->post("stockMinimo");
		$categoriaID = $this->input->post("categoria");
		$estado = $this->input->post("estado");

		//la variable estado viene como una cadena, si es on u vacia
		
		$data = array(
			'pro_codigo' => $codigo,
			'pro_nombre' => $nombre,
			'pro_descripcion' => $descripcion, 
			'pro_stockMinimo' => $stockMinimo, 
			'categoriaID' => $categoriaID,
			'pro_estado'=> "1" 
		);

		if($this->ProductoModel->insertProducto($data))
			redirect(base_url()."productos/productos");
		else 
			redirect(base_url()."productos/productos/registrar");

			/* 
				TODO:falta validar el ingreso de datos a nivel de backend
				TODO: falta mandar mensajes al usuario interactivo para ver si se guardo o no:ALERTAS
			*/
	}

	public function editProducto($id)
	{
		$data = array(
			'producto' => $this->ProductoModel->getProducto($id) , 
			'listadoCategorias' => $this->CategoriaModel->listCategorias() //join
		);
		//Mostrar las views
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/productos/edit_pro', $data);
		$this->load->view('layouts/footer');
	}

	public function updateProducto()
	{
		$productoID = $this->input->post("idProducto");
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$stockMinimo = $this->input->post("stockMinimo");
		$categoriaID = $this->input->post("categoria");
	

		$data = array(
			'pro_codigo' => $codigo,
			'pro_nombre' => $nombre,
			'pro_descripcion' => $descripcion, 
			'pro_stockMinimo' => $stockMinimo, 
			'categoriaID' => $categoriaID
		);

		 if ($this->ProductoModel->updateProducto($productoID, $data)) {
			redirect(base_url()."productos/productos");
		 }else{
			redirect(base_url()."productos/productos/editar/".$productoID);
		 }
	}

	public function deleteProducto($id){
		
		$data = array(
			'pro_estado' => "0",
		 );
		 $this->ProductoModel->updateProducto($id, $data);
		echo "productos";
	
	}

}
