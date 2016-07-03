<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profe extends CI_Controller{
  public function __construct() {
    parent::__construct();
    $this->load->model('Profe_model');
}

  public function index(){

		$data['content'] = 'profe/inicio';
		$this->load->view('profe/plantilla', $data);
	}



				public function login(){
				$matricula = $this->input->post('matricula');
				$nom = $this->input->post('nombreProfesor');
						//veridicar en la bd si existe el usuario
				$usuario = $this->Profe_model->login($matricula, $nom);
				if($usuario){

						$arreglo_usuario = array(
										'idProfesor'=> $usuario->idProfesor,
										'matricula' => $usuario->matricula,
										'privilegios' => $usuario->privilegios,

										'autentificado' => TRUE
								);

						$this->session->set_userdata($arreglo_usuario);
						redirect('Profe/logueado');
				}else{

						redirect('Profe/index');
				}
		}

		public function logueado(){

				if($this->session->userdata('autentificado')){

					$data['matricula'] = $this->session->userdata('matricula');
					$data['id'] = $this->session->userdata('idProfesor');
					$data['privilegios'] = $this->session->userdata('privilegios');

					$this->load->view('profe/logueado', $data);

				}else {

						redirect('Profe/index');

				}

		}


		public function cerrarSecion(){
			$arreglo_usuario = array(

			'autentificado' => FALSE
		);
		$this->session->set_userdata($arreglo_usuario);
		redirect('Profe');

		}


}
