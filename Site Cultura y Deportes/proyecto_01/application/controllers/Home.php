<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
  public function __construct() {
    parent::__construct();
    $this->load->model('Home_model');
}

  public function index(){

		$data['content'] = 'Profesores/inicio';
		$this->load->view('Profesores/plantilla', $data);

	}

  public function login(){
    $matricula = $this->input->post('matricula');
    $pass = $this->input->post('password');
    //veridicar en la bd si existe el usuario
    $usuario = $this->Home_model->login($matricula, $pass);
        if($usuario){

            $arreglo_usuario = array(
            'idProfesor'=> $usuario->idProfesor,
            'matricula' => $usuario->matricula,
            'nombre' => $usuario->nombre,
            'privilegios' => $usuario->privilegios,

            'autentificado' => TRUE
        );

          $this->session->set_userdata($arreglo_usuario);
          redirect('Home/l_profesor');
      }else{

        redirect('Home/index');
          }
        }

        public function l_profesor(){

				if($this->session->userdata('autentificado')){
					$data['matricula'] = $this->session->userdata('matricula');
					$data['id'] = $this->session->userdata('idProfesor');
                    $data['nombre'] = $this->session->userdata('nombre');
					$data['privilegios'] = $this->session->userdata('privilegios');


					$this->load->view('Profesores/l_profesor', $data);

				}else {

						redirect('Home/index');

				}

		}





}
