<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Profesores_model');
    }

    public function getProfe($id=null){
      $data['profesor'] = $this->Profesores_model->getProfe();
      $this->load->view('admin/profesor', $data);
    	}

    public function nuevoProfe(){
    $this->load->view('admin/profesores/nuevoProfe');
}

public function addProfe(){
    $m = $this->input->post('matricula');
    $f = $this->input->post('foto');
    $n = $this->input->post('nombreProfesor');
    $d = $this->input->post('direccion');
    $t = $this->input->post('telefono');
    $p = $this->input->post('privilegios');

    $this->Profesores_model->addProfe($m,$f,$n,$d,$t,$p);

    $this->getProfe();
}

		public function actualizarProfe($id){
				$data['profesor'] = $this->Profesores_model->getProfe($id);
				$this->load->view('admin/profesores/actualizarProfe', $data);
		}

		public function upProfe(){
				$id = $this->input->post('id');
				$m = $this->input->post('matricula');
		    $f = $this->input->post('foto');
		    $n = $this->input->post('nombreProfesor');
		    $d = $this->input->post('direccion');
		    $t = $this->input->post('telefono');
		    $p = $this->input->post('privilegios');

				$this->Profesores_model->upProfe($id,$m,$f,$n,$d,$t,$p);
				$this->getProfe();

		}

		public function delProfe($id){
				$this->Profesores_model->delProfe($id);

				$this->getProfe();
		}
	}
