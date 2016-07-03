<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class usu extends CI_Controller{
	public function __construct() {
			parent::__construct();
			$this->load->model('Usuario_model');
	}


	public function index(){
		$data['content'] = 'Usuario';
		$this->load->view('plantilla2', $data);
	}

	public function contact(){
				$empleado = $this->input->post('NumeroEmpleado');
				$profesor = $this->input->post('NombreProfesor');
						//veridicar en la bd si existe el usuario
				$usuario = $this->Usuario_model->contact($empleado, $profesor);
				if($usuario){

						$arreglo_usuario = array(
								'NumeroEmpleado'=> $usuario->NumeroEmpleado,
										'NombreProfesor' => $usuario->NombreProfesor,
										'autentificado' => TRUE
								);

						$this->session->set_userdata($arreglo_usuario);
						redirect('admin/index');
				}else{

						redirect('usu/index');
				}
		}

		public function home(){

				if($this->session->userdata('autentificado')){

					$data['empleado'] = $this->session->userdata('NumeroEmpleado');
					$data['nombre'] = $this->session->userdata('NombreProfesor');

					$this->load->view('admin/index', $data);

				}else {

						redirect('usu/index');

				}

		}


		public function cerrarSecion(){
			$arreglo_usuario = array(

			'autentificado' => FALSE
		);
		$this->session->set_userdata($arreglo_usuario);
		redirect('usu');

		}



}


?>
