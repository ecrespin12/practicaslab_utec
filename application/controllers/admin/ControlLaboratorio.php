<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControlLaboratorio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//verificar la session de usuario
		//verificar la session de usuario
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['mes'] = (int)date('m');
		$data['anio'] = (int)date('Y');
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/controlLaboratorio', $data);
		$this->load->view('layouts/footer');
		$this->load->view('scripts/controlLab');
	}

	// public function changeMes($mes)
	// {
	// 	$a = $this->input->post('txtAnio');
	// 	$data['mes'] = $mes;
	// 	if ($a > 0) {
	// 		$data['anio'] = $a;
	// 	} else
	// 		$data['anio'] = date('Y');

	// 	$this->load->view('layouts/header');
	// 	$this->load->view('layouts/aside');
	// 	$this->load->view('layouts/nav');
	// 	$this->load->view('admin/controlLaboratorio', $data);
	// 	$this->load->view('layouts/footer');
	// 	$this->load->view('scripts/controlLab');
	// }

	public function filtrar()
	{
		if ($this->input->post()) {
			$data['mes'] = $this->input->post('ddlMes');
			$data['anio'] = $this->input->post('txtAnio');
		} else {
			$data['mes'] = date('m');
			$data['anio'] = date('Y');
		}
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/controlLaboratorio', $data);
		$this->load->view('layouts/footer');
		$this->load->view('scripts/controlLab');
	}

	public function getListaPrac()
	{
		$f = $this->input->post('fecha');
		$practicas = array(
			array(
				'cod' => '1',
				'lab' => 'LAB-1',
				'fec' => '21/04/2019',
				'ini' => '10:00',
				'fin' => '12:00',
				'cup' => 30
			),
			array(
				'cod' => '2',
				'lab' => 'LAB-1',
				'fec' => '20/04/2019',
				'ini' => '13:00',
				'fin' => '16:00',
				'cup' => 25
			),
			array(
				'cod' => '3',
				'lab' => 'LAB-2',
				'fec' => '21/04/2019',
				'ini' => '10:00',
				'fin' => '12:00',
				'cup' => 15
			),
			array(
				'cod' => '4',
				'lab' => 'LAB-2',
				'fec' => '20/04/2019',
				'ini' => '13:00',
				'fin' => '16:00',
				'cup' => 25
			),
			array(
				'cod' => '5',
				'lab' => 'LAB-3',
				'fec' => '21/04/2019',
				'ini' => '10:00',
				'fin' => '12:00',
				'cup' => 20
			),
			array(
				'cod' => '6',
				'lab' => 'LAB-3',
				'fec' => '20/04/2019',
				'ini' => '13:00',
				'fin' => '16:00',
				'cup' => 30
			)
		);
		$ret = array_filter($practicas, function ($var) use ($f) {
			if ($var['fec'] == $f) return $f;
		});
		header('Content-Type: application/json');
		echo json_encode($ret);
	}
}

