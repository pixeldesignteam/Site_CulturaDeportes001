<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }




	public function index(){

		$data['content'] = 'home';
		$this->load->view('plantilla', $data);
	}

	public function getalumnos($id=null){
			$data['users']=$this->model->getalumnos($matri);
			$this->load->view('alumnos', $data);
	}

	public function nuevoAl(){
		$this->load->view('nuevoAl');
}

	public function addAlumno(){
		$m = $this->input->post('Matricula');
		$f = $this->input->post('Foto');
		$n = $this->input->post('NombreAlumno');
		$d = $this->input->post('Direccion');
		$t = $this->input->post('Telefono');
		$a = $this->input->post('Alergias');
		$e = $this->input->post('EnfermedadesCronicas');
		$p = $this->input->post('Peso');
		$al = $this->input->post('Altura');
		$ti = $this->input->post('TipoSangre');

		$this->model->addAlumno($m,$f,$n,$d,$t,$a,$e,$p,$al,$ti);

		$this->getalumnos();
}




}


?>
