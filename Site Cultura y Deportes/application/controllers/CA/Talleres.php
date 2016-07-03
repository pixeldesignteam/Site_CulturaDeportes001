<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talleres extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Talleres_model');
    }

    public function getTaller($id=null){
      $data['taller'] = $this->Talleres_model->getTaller();
      $this->load->view('admin/taller', $data);
    	}

    public function nuevoTaller(){
    $this->load->view('admin/talleres/nuevoTaller');
}

public function addTaller(){
    $n = $this->input->post('nombreTaller');
    $d = $this->input->post('descripcion');
    $this->Talleres_model->addTaller($n,$d);

    $this->getTaller();
}

		public function actualizarTaller($id){
				$data['taller'] = $this->Talleres_model->getTaller($id);
				$this->load->view('admin/talleres/actualizarTaller', $data);
		}

		public function upTeller(){
				$id = $this->input->post('id');
				$n = $this->input->post('nombreTaller');
		    $d = $this->input->post('descripcion');


				$this->Talleres_model->upTeller($id,$n,$d);
				$this->getTaller();

		}

		public function delTaller($id){

				$this->Talleres_model->delTaller($id);

				$this->getTaller();
		}
	}
