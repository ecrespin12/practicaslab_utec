<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	//Constructor del controlador: aca se agregan referencias a modelos
	public function __construct()
	{
		parent::__construct();
	
	}

	//funcion principal
	public function index()
	{
		//verificar la session de usuario

			$this->load->view('login');
	}

	public function login()
	{
		//Temporal

		$user = $this->input->post("usuario");
	
		if($user=="estudiante" || $user=="lab" || $user=="admin")
			$login=true;		
		else 
			 $login=false;
		
		//si el nombre de usuario ingresado es correcto enviarlo al controlador Dashboard
		if($login==true){
			$data  = array(
				'usuario' => $user,
				'login' => $login
			);
			$this->session->set_userdata($data);
			redirect(base_url() . "Dashboard");
		}
		else
			redirect(base_url());
	

	}


}


