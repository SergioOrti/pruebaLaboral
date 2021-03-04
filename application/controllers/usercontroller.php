<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('usermodel');
	}

	function index() {
		$data['users'] = $this->usermodel->get_user_list();
		$this->load->view('users', $data);
	}

	public function create() {
			$this->load->view('user_create');
	}

	public function guardar_usuario(){

		$result['resp'] = $this->usermodel->create_user($this->input->post('usuario'), $this->input->post('email'), $this->input->post('password'), $this->input->post('telefono'), $this->input->post('direccion'));

		$result['men']  = "guardado de manera correcta";
		echo json_encode($result);
	}

	function update($_id) {
			$data['user'] = $this->usermodel->get_user($_id);
			$this->load->view('user_update', $data);
	}

	public function guardar_update(){
			$result['resp'] = $this->usermodel->update_user($this->input->post('id_usuario'), $this->input->post('usuario'), $this->input->post('email'), $this->input->post('password'), $this->input->post('telefono'), $this->input->post('direccion'));
			$result['men']  = "Actualizado de manera correcta";

			echo json_encode($result);
	}

	function delete($_id) {
		if ($_id) {
			$this->usermodel->delete_user($_id);
		}
		redirect('/');
	}

	public function prueba1(){
		$this->load->view('prueba1');
	}

}
