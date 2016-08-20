<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lugares extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Lugares_model');
    }

    public function getLugar($id=null){
			if($this->session->userdata('autentificado')){
				$data['lugar'] = $this->Lugares_model->getLugar();
        $this->load->view('admin/lugar', $data);

	 }  else {
			 redirect('Home/index');
	 }
 }

    public function nuevoLugar(){
			if($this->session->userdata('autentificado')){
			   $this->load->view('admin/lugares/nuevoLugar');
	 }  else {
			 redirect('Home/index');
	 }

}

public function addLugar(){
	if($this->session->userdata('autentificado')){
		$n = $this->input->post('nombreLugar');
		$d = $this->input->post('direccion');
	 $i = $this->input->post('idTaller');
		$this->Lugares_model->addLugar($n,$d,$i);

	 redirect('CA/Lugares/getLugar');
	 }  else {
			 redirect('Home/index');
	 }

}

		public function actualizarLugar($id){
			if($this->session->userdata('autentificado')){
				$data['lugar'] = $this->Lugares_model->getLugar($id);
 			 $this->load->view('admin/lugares/actualizarLugar', $data);
	 }  else {
			 redirect('Home/index');
	 }

		}

		public function upLugar(){
			if($this->session->userdata('autentificado')){
				$id = $this->input->post('id');
 				$n = $this->input->post('nombreLugar');
 		    $d = $this->input->post('direccion');
 				$i = $this->input->post('idTaller');


 				$this->Lugares_model->upLugar($id,$n,$d,$i);
 				redirect('CA/Lugares/getLugar');

	 }  else {
			 redirect('Home/index');
	 }

		}

    public function delLugar($id){
        $this->Lugares_model->delLugar($id);
				redirect('CA/Lugares/getLugar');
    }

		public function tuXML($nombre){
				$xml = $this->Lugares_model->tuXML();
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
