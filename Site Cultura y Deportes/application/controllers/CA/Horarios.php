<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horarios extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Horarios_model');
    }

		public function getHora($id=null){
      $data['horario'] = $this->Horarios_model->getHora();
      $this->load->view('admin/horario', $data);
    	}

    public function nuevoHorario(){
    $this->load->view('admin/horarios/nuevoHorario');
}

public function addHora(){
    $h = $this->input->post('hora');
    $d = $this->input->post('dia');
    $l = $this->input->post('lugar');
    $c = $this->input->post('cuatrimestre');

    $this->Horarios_model->addHora($h,$d,$l,$c);

    $this->getHora();
}

		public function actualizarHorario($id){
				$data['horario'] = $this->Horarios_model->getHora($id);
				$this->load->view('admin/horarios/actualizarHorario', $data);
		}

		public function upHora(){
				$id = $this->input->post('id');
				$h = $this->input->post('hora');
		    $d = $this->input->post('dia');
		    $l = $this->input->post('lugar');
		    $c = $this->input->post('cuatrimestre');

				$this->Horarios_model->upHora($id,$h,$d,$l,$c);
				$this->getHora();

		}

		public function delHora($id){
				$this->Horarios_model->delHora($id);

				$this->getHora();
		}
}
