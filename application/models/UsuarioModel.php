<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

  public function login($user, $password)
  {

		$this->db->where("usu_usuario", $user);
		$this->db->where("usu_password", $password);

		$results = $this->db->get("usuarios");
		if ($results->num_rows() > 0) {
			return $results->row();
		}
		else{
			return false;
		}
	}

  
}
