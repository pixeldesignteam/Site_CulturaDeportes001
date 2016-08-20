<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talleres extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Talleres_model');
    }

    public function getTaller($id=null){
			if($this->session->userdata('autentificado')){
				$data['taller'] = $this->Talleres_model->getTaller();
        $this->load->view('admin/taller', $data);
	 }  else {
			 redirect('Home/index');
	 }

    	}


    public function nuevoTaller(){
			if($this->session->userdata('autentificado')){
			   $this->load->view('admin/talleres/nuevoTaller');
	 }  else {
			 redirect('Home/index');
	 }

}

public function addTaller(){
	if($this->session->userdata('autentificado')){
		$n = $this->input->post('nombreTaller');
		$d = $this->input->post('direccion');


		$this->Talleres_model->addTaller($n,$d);

	 redirect('CA/Talleres/getTaller');
	 }  else {
			 redirect('Home/index');
	 }

}

		public function actualizarTaller($id){
			if($this->session->userdata('autentificado')){
				$data['taller'] = $this->Talleres_model->getTaller($id);
 				$this->load->view('admin/talleres/actualizarTaller', $data);
	 }  else {
			 redirect('Home/index');
	 }

		}

		public function upTeller(){
			if($this->session->userdata('autentificado')){
				$id = $this->input->post('id');
				$n = $this->input->post('nombreTaller');
				$d = $this->input->post('direccion');


				$this->Talleres_model->upTeller($id,$n,$d);
				redirect('CA/Talleres/getTaller');
	 }  else {
			 redirect('Home/index');
	 }
		}

		public function delTaller($id){

				$this->Talleres_model->delTaller($id);

				redirect('CA/Talleres/getTaller');
		}

		public function tuXML($nombre){
		$xml = $this->Talleres_model->tuXML();
		$this->load->helper('download');

		$nombre.='.xml';

		force_download($nombre,$xml);
}


		public function cerrarSecion(){
			$arreglo_usuario = array(

			'autentificado' => FALSE
		);
		$this->session->set_userdata($arreglo_usuario);
		redirect('/Home/index');

		}
	}
