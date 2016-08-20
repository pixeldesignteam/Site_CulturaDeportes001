<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model/Profesores_model');
    }

    public function getProfe($id=null){
			if($this->session->userdata('autentificado')){
				$data['profesor'] = $this->Profesores_model->getProfe();
        $this->load->view('admin/profesor', $data);

	 }  else {
			 redirect('Home/index');
	 }
      }

    public function nuevoProfe(){
			if($this->session->userdata('autentificado')){
			 $this->load->view('admin/profesores/nuevoProfe');
	 }  else {
			 redirect('Home/index');
	 }

}

public function addProfe(){
	if($this->session->userdata('autentificado')){

		$m = $this->input->post('matricula');

		$config['upload_path'] = './upload/';
		$config['remove_spaces'] = TRUE;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		$f = $this->input->post('foto');
		$n = $this->input->post('nombre');
	 $p = $this->input->post('password');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$p = $this->input->post('privilegios');
	 $e = $this->input->post('email');

	 if(!$this->upload->do_upload('foto')){
		 echo $this->upload->display_errors();
	 }else{
		 $file_info = $this->upload->data();
		 $this->Profesores_model->addProfe($m,$file_info['file_name'],$n,$p,$d,$t,$p,$e);

		 redirect('CA/Profesores/getProfe');
	}

 }else {

	redirect('Home/index');

}

}

		public function actualizarProfe($id){
			if($this->session->userdata('autentificado')){
				$data['profesor'] = $this->Profesores_model->getProfe($id);
 			 $this->load->view('admin/profesores/actualizarProfe', $data);
	 }  else {
			 redirect('Home/index');
	 }

		}

		public function upProfe(){
			if($this->session->userdata('autentificado')){
				$id = $this->input->post('id');
				$m = $this->input->post('matricula');
				$f = $this->input->post('foto');
				$n = $this->input->post('nombre');
				$p = $this->input->post('password');
				$d = $this->input->post('direccion');
				$t = $this->input->post('telefono');
				$pr = $this->input->post('privilegios');
				$e = $this->input->post('email');

				$this->Profesores_model->upProfe($id,$m,$f,$n,$p,$d,$t,$pr,$e);
				redirect('CA/Profesores/getProfe');
	 }  else {
			 redirect('Home/index');
	 }


		}

		public function delProfe($id){
				$this->Profesores_model->delProfe($id);

				redirect('CA/Profesores/getProfe');
		}

		public function tuXML($nombre){
				$xml = $this->Profesores_model->tuXML();
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
