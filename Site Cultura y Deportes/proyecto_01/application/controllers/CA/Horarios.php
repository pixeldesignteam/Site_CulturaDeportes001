<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horarios extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Horarios_model');
    }

		public function getHora($id=null){
			if($this->session->userdata('autentificado')){
				$data['horario'] = $this->Horarios_model->getHora();
				$this->load->view('admin/horario', $data);
	 }  else {
			 redirect('Home/index');
	 }

    	}

    public function nuevoHorario(){
			if($this->session->userdata('autentificado')){
				$this->load->view('admin/horarios/nuevoHorario');

	 }  else {
			 redirect('Home/index');
	 }
 }


public function addHora(){
	if($this->session->userdata('autentificado')){
		$h = $this->input->post('hora');
		$d = $this->input->post('dia');
		$c = $this->input->post('cuatrimestre');

		$this->Horarios_model->addHora($h,$d,$c);

	 redirect('CA/Horarios/getHora');
	 }  else {
			 redirect('Home/index');
	 }

}

		public function actualizarHorario($id){
			if($this->session->userdata('autentificado')){
				$data['horario'] = $this->Horarios_model->getHora($id);
 				$this->load->view('admin/horarios/actualizarHorario', $data);
	 }  else {
			 redirect('Home/index');
	 }

		}

		public function upHora(){
			if($this->session->userdata('autentificado')){
				$id = $this->input->post('id');
 				$h = $this->input->post('hora');
 		    $d = $this->input->post('dia');
 		    $c = $this->input->post('cuatrimestre');

 				$this->Horarios_model->upHora($id,$h,$d,$c);
 				redirect('CA/Horarios/getHora');
	 }  else {
			 redirect('Home/index');
	 }
		}

		public function delHora($id){
				$this->Horarios_model->delHora($id);

				redirect('CA/Horarios/getHora');
		}

		public function tuXML($nombre){
		$xml = $this->Horarios_model->tuXML();
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
