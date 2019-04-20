<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	
	}

	public function index()
	{
		//verificar la session de usuario

			$this->load->view('login');
	}

	public function login()
	{

		$userName = $this->input->post("username");
		$password = $this->input->post("password");

			redirect(base_url() . "dashboard");
		
	}


}


